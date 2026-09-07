# build assets (vite/tailwind)
FROM node:24-alpine AS assets
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
COPY . .
RUN npm run build

# app
FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    libzip-dev libpng-dev libicu-dev libonig-dev unzip git \
    && docker-php-ext-install pdo_mysql mbstring bcmath gd zip intl pcntl exif \
    && pecl install redis && docker-php-ext-enable redis \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-interaction --prefer-dist

COPY . .
COPY --from=assets /app/public/build ./public/build
RUN mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache/data storage/logs bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache
RUN composer dump-autoload --optimize

EXPOSE 7000
CMD php -r "(new PDO('mysql:host='.getenv('DB_HOST'), getenv('DB_USERNAME'), getenv('DB_PASSWORD')))->exec('CREATE DATABASE IF NOT EXISTS '.getenv('DB_DATABASE'));" \
    && php artisan migrate --force \
    && php artisan serve --host=0.0.0.0 --port=7000
