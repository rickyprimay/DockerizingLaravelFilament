# Gunakan image PHP dengan FPM dan Composer
FROM php:8.2-fpm

# Instal ekstensi yang diperlukan untuk Laravel, termasuk intl
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    libicu-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd zip mbstring intl

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy aplikasi Laravel
COPY . /var/www

# Install dependensi
RUN composer install --no-scripts --no-autoloader --prefer-dist --no-dev

# Buat file cache config dan optimasi autoloader
RUN composer dump-autoload --optimize

# Ubah permission storage dan bootstrap
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port 9000 untuk PHP-FPM
EXPOSE 9000

# Jalankan PHP-FPM
CMD ["php-fpm"]
