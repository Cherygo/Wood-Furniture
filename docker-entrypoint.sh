#!/bin/bash
set -e

echo "Ensuring directory permissions for local development volume..."
chmod -R 777 storage bootstrap/cache public || true

echo "Installing PHP dependencies..."
composer install --optimize-autoloader

echo "Installing Node.js dependencies and building frontend assets..."
npm install
npm run build

echo "Clearing application caches..."
php artisan optimize:clear

echo "Starting Web Server..."

exec "$@"
