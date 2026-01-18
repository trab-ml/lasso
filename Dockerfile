FROM php:8.3-apache

WORKDIR /var/www/html

RUN apt-get update && apt-get upgrade -y

COPY ./config/apache-config.conf /etc/apache2/sites-available/l-asso-website.conf

# Enable modules first
RUN a2enmod rewrite && \
    a2enmod headers && \
    a2enmod expires

# Configure Apache
RUN echo 'ServerName localhost' >> /etc/apache2/apache2.conf && \
    a2dissite 000-default && \
    a2ensite l-asso-website

COPY . .

RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

EXPOSE 80
