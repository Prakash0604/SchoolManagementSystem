# Use the specified PHP version as base image
FROM php:8.1-fpm as production

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    unzip \
    curl \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    libwebp-dev \
    librdkafka-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_pgsql mbstring zip exif pcntl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j "$(nproc)" gd opcache \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && groupadd -g 1000 www-schoolmanagement \
    && useradd -u 1000 -ms /bin/bash -g www-schoolmanagement www-schoolmanagement

# Copy application files and set permissions
COPY --chown=www-schoolmanagement:www-schoolmanagement . /var/www
RUN chmod -R 775 /var/www/storage

# Switch to the created user
USER www-schoolmanagement

EXPOSE 9000

CMD ["php-fpm"]

# Run Laravel application
# CMD ["sh", "-c", "composer update -W && php artisan octane:start --workers=8 --task-workers=16 --host=0.0.0.0 --port=9000"]
