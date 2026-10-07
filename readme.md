### Osobní web
## Kompilace:
```
npm run build
```
nebo
```
composer build
```
## Nasazení:
Docker image přes GitHub Actions a ghcr.io, na serveru Docker Compose za Caddy, viz [docs/docker.md](docs/docker.md).
```
task release -- v1.0.0
```