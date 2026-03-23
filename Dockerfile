FROM php:8.3-apache

WORKDIR /var/www/html

RUN apt-get update && \
    apt-get install -y --no-install-recommends libzip-dev && \
    docker-php-ext-install zip && \
    apt-get purge -y --auto-remove libzip-dev && \
    rm -rf /var/lib/apt/lists/*

COPY ./config/apache-config.conf /etc/apache2/sites-available/l-asso-website.conf

RUN a2enmod rewrite headers expires \
    && a2dissite 000-default.conf \
    && a2ensite l-asso-website.conf

COPY . .

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
CMD ["apache2-foreground"]