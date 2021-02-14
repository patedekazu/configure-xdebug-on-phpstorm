FROM php:7.4-fpm

RUN apt -y update && \
    apt -y upgrade && \
    apt -y autoremove

RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

COPY conf/xdebug.ini /usr/local/etc/php/conf.d/
