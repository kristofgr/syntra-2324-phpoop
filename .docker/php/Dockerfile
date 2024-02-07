FROM php:8.1-fpm

# Installing dependencies for building the PHP modules
RUN apt update && \
    apt install -y zip libzip-dev libpng-dev libicu-dev libxml2-dev

# Installing additional PHP modules
RUN docker-php-ext-install pdo pdo_mysql gd zip intl xml
# RUN docker-php-ext-install mysqli

# Cleaning APT cache
RUN apt clean