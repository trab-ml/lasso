FROM php:8.3-apache

WORKDIR /var/www/html

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Disable conflicting MPM modules and enable mpm_prefork
RUN a2dismod mpm_event mpm_worker && \
    a2enmod mpm_prefork

COPY ./config/apache-config.conf /etc/apache2/sites-available/l-asso-website.conf
RUN a2enmod rewrite headers expires
RUN echo 'ServerName localhost' >> /etc/apache2/apache2.conf && \
    a2dissite 000-default.conf && \
    a2ensite l-asso-website.conf
COPY --chown=www-data:www-data . .
RUN chmod -R 755 /var/www/html
ENV PORT=80

EXPOSE ${PORT}
CMD ["apache2-foreground"]
