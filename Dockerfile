FROM php:8.2-fpm-alpine

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

# Set working directory
WORKDIR /var/www
