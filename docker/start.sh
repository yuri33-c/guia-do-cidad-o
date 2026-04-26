#!/usr/bin/env bash
set -e

PORT="${PORT:-8000}"

if [ -n "${APP_URL:-}" ]; then
    export APP_URL="$(printf '%s' "$APP_URL" | tr -d '\r\n\t')"
fi

if [ -n "${APP_KEY:-}" ]; then
    export APP_KEY="$(printf '%s' "$APP_KEY" | tr -d '\r\n\t')"
fi

php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

php artisan serve --host=0.0.0.0 --port="${PORT}"
