# syntax=docker/dockerfile:1

ARG PHP_VERSION=8.5

# ---------------------------------------------------------------------------
# build: Vite (CSS/JS) a Jigsaw → build_production/
# Vite plugin po buildu sám spouští vendor/bin/jigsaw, proto PHP i Node v jedné stage
# ---------------------------------------------------------------------------
FROM php:${PHP_VERSION}-cli-alpine AS build

# unzip pro composer (rozbalení balíčků)
RUN apk add --no-cache nodejs npm unzip
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --no-progress
COPY package.json package-lock.json ./
RUN npm ci --no-audit --no-fund
COPY . .
# Plugin chybu Jigsaw jen vypíše a build skončí úspěšně, proto kontrola výstupu
RUN npm run build && test -f build_production/index.html

# ---------------------------------------------------------------------------
# prod: nginx bez root práv na portu 8080, jen hotové statické soubory
# ---------------------------------------------------------------------------
FROM nginxinc/nginx-unprivileged:stable-alpine AS prod

COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf
COPY --from=build /app/build_production/ /usr/share/nginx/html/

HEALTHCHECK --interval=30s --timeout=5s --start-period=5s --retries=3 \
    CMD wget -q --spider http://127.0.0.1:8080/ || exit 1
