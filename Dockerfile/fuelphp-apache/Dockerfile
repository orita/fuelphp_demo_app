FROM php:5.6-apache

# install mysql driver for php
RUN docker-php-ext-install pdo pdo_mysql
# enable rewrite
RUN cd /etc/apache2/mods-enabled && ln -s ../mods-available/rewrite.load 

WORKDIR /var/www
RUN rm -r /var/www/html && ln -s /var/www/demo_app/public /var/www/html
