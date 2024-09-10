# Use the official PHP image with the required extensions
FROM php:8.2-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
    libzip-dev unzip git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy the application files
COPY . .

# Install Composer and dependencies
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install

# Expose port 9000
EXPOSE 9000

CMD ["php-fpm"]
