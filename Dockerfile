#Dockerfile para deploy do site.

# Etapa 1: Build do front-end (Vite)
FROM node:18 AS node-build
WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY . .
RUN npm run build

# Etapa 2: Instalar dependências PHP
FROM composer:2 AS composer-vendor
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-interaction --no-progress --prefer-dist
COPY . .

# Etapa 3: PHP + Apache final
FROM php:8.2-apache
WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    libzip-dev unzip zlib1g-dev \
 && docker-php-ext-install pdo pdo_mysql zip \
 && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite

COPY --from=composer-vendor /app /var/www/html
COPY --from=node-build /app/public/build /var/www/html/public/build

RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
CMD ["apache2-foreground"]
