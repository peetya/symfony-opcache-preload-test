FROM php:7.4-fpm

RUN apt-get update && \
    apt-get install -y libpng-dev libjpeg-dev libpq-dev zip unzip sudo wget zlib1g-dev libicu-dev libzip-dev libzstd-dev g++ && \
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install opcache

RUN rm -rf /var/www/html \
    && chmod 0777 /tmp/

