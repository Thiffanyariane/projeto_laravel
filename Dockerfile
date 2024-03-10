FROM php:8.1-fpm
RUN apt-get update && apt-get install -y \
    nginx\
    openssl \
    zip \
    unzip \
    git \
    libpq-dev \
    libzip-dev \
    libonig-dev \ 
    && docker-php-ext-install pdo pdo_mysql mbstring zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app
COPY . /app
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8181
EXPOSE 8181
