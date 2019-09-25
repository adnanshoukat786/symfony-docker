FROM php:7-fpm
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug
ADD ./php.ini /usr/local/etc/php/php.ini
#RUN pecl install -f xdebug \
#&& echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini;
EXPOSE 80