# Docker a nasazení

Web je statický (Jigsaw + Vite). Docker image obsahuje jen nginx s hotovými soubory, PHP a Node se použijí jen při sestavení image. Vývoj se nemění: `composer start` / `npm run dev`.

```
task release -- 1.2.0 → tag v1.2.0 → GitHub Actions → ghcr.io/jiri24/osobni-web:1.2.0 + :latest
server: docker compose pull && docker compose up -d → Caddy → 127.0.0.1:8090
```

## Lokální náhled produkčního image

```bash
task up      # sestaví image a spustí ho na http://127.0.0.1:8090
task open    # otevře náhled v prohlížeči
task logs    # logy nginx
task down    # zastaví
```

Hodí se jako kontrola před vydáním: když projde `task up`, projde i build v GitHub Actions.

## Jednorázové nastavení

### GitHub

Workflow [.github/workflows/release.yml](../.github/workflows/release.yml) nic nastavovat nepotřebuje, image pushuje s automatickým `GITHUB_TOKEN`. Image v ghcr.io je soukromý, server proto potřebuje token na stahování:

1. Vytvoř token (classic) jen se scope `read:packages`: <https://github.com/settings/tokens/new?scopes=read:packages>
2. Poznač si jeho expiraci. Po vypršení `docker compose pull` hlásí `denied` (viz [Problémy](#problémy)).

### Server

Potřeba je Docker Engine s Compose pluginem 2.24 nebo novějším (`docker compose version`).

```bash
sudo systemctl enable docker    # Docker a kontejnery nastartují i po restartu serveru
sudo mkdir -p /srv/osobni-web && sudo chown $USER: /srv/osobni-web
docker login ghcr.io -u jiri24  # heslo = token z kroku výše
```

Přihlášení platí jen pro uživatele, který ho provedl. Pod stejným uživatelem pak spouštěj `docker compose`.

Z lokálu zkopíruj compose soubory (znovu pokaždé, když se změní):

```bash
scp compose.yaml compose.prod.yaml <server>:/srv/osobni-web/
```

Na serveru vytvoř `/srv/osobni-web/.env`:

```dotenv
COMPOSE_FILE=compose.yaml:compose.prod.yaml
# Port na 127.0.0.1, na který míří Caddy (výchozí 8090)
#APP_PORT=8090
# Pevná verze, bez ní nejnovější vydaná (latest)
#APP_VERSION=1.0.0
```

### Caddy

Do `/etc/caddy/Caddyfile` přidej tyto bloky (případný starý blok webu, např. s `file_server`, nahraď):

```caddyfile
www.jiri-valusek.cz {
	reverse_proxy 127.0.0.1:8090
}

jiri-valusek.cz {
	redir https://www.jiri-valusek.cz{uri} permanent
}
```

```bash
sudo systemctl reload caddy
```

Certifikáty a přesměrování z HTTP na HTTPS vyřídí Caddy sám. DNS záznamy `jiri-valusek.cz` a `www.jiri-valusek.cz` musí mířit na server.

## Vydání a nasazení

1. Commitni změny (`task release` s necommitnutými změnami nepustí).
2. `task release -- 1.2.0` vytvoří tag `v1.2.0` a pushne ho spolu s aktuální větví.
3. Počkej, až v záložce **Actions** na GitHubu doběhne workflow **Release**.
4. Na serveru:

```bash
cd /srv/osobni-web
docker compose pull && docker compose up -d
docker compose ps        # stav musí být "healthy"
docker image prune -f    # smaže staré image
```

### Návrat ke starší verzi

V `/srv/osobni-web/.env` nastav `APP_VERSION=1.1.0` a spusť `docker compose up -d`. Zpět na nejnovější verzi: řádek zakomentuj a spusť `docker compose pull && docker compose up -d`.

## Užitečné příkazy na serveru

```bash
docker compose ps           # stav a healthcheck
docker compose logs -f app  # logy nginx
# Která verze běží
docker inspect -f '{{index .Config.Labels "org.opencontainers.image.version"}}' $(docker compose ps -q app)
```

## Problémy

- **`docker compose pull` hlásí `denied` nebo `unauthorized`:** token vypršel nebo chybí přihlášení. Vytvoř nový token a znovu `docker login ghcr.io -u jiri24`.
- **Port 8090 je na serveru obsazený:** nastav jiný `APP_PORT` v `.env` a stejný port dej do Caddyfile.
- **Server s ARM procesorem:** image se sestavuje jen pro `linux/amd64`.
