FROM php:8.2-fpm

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git zip unzip libzip-dev

RUN docker-php-ext-install pdo pdo_mysql sockets zip

    
RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html/app
COPY . .
RUN composer install

CMD php artisan serve --host=0.0.0.0
EXPOSE 8000