FROM php:8.1-fpm

# Installing dependencies for building the PHP modules
RUN apt update && \
    apt install -y apache2 zip libzip-dev libpng-dev libicu-dev libxml2-dev

# Installing additional PHP modules
RUN docker-php-ext-install pdo pdo_mysql gd zip intl xml && a2enmod rewrite

# Cleaning APT cache
RUN apt clean