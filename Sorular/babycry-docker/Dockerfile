FROM php:7.4-apache
MAINTAINER Harald Nezbeda <hn@nezhar.com>

COPY ./php.ini /usr/local/etc/php/
COPY ./ssl-cert-snakeoil.key /etc/ssl/private/
COPY ./ssl-cert-snakeoil.pem /etc/ssl/certs/
COPY ./index.php /var/www/html

RUN a2enmod rewrite
RUN a2ensite default-ssl
RUN a2enmod ssl

EXPOSE 80
EXPOSE 443
