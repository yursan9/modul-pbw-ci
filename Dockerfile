FROM php:apache
COPY . /var/www/html

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
