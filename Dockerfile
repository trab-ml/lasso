FROM php:8.3-apache

WORKDIR /var/www/html

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Properly disable conflicting MPM modules and enable mpm_prefork
RUN a2dismod mpm_event mpm_worker || true && \
    a2enmod mpm_prefork

COPY ./config/apache-config.conf /etc/apache2/sites-available/l-asso-website.conf
RUN a2enmod rewrite headers expires
RUN echo 'ServerName localhost' >> /etc/apache2/apache2.conf && \
    a2dissite 000-default.conf && \
    a2ensite l-asso-website.conf

# Ensure MPM configuration is correct by removing conflicting .load files
RUN rm -f /etc/apache2/mods-enabled/mpm_event.load \
    /etc/apache2/mods-enabled/mpm_worker.load && \
    ln -sf /etc/apache2/mods-available/mpm_prefork.load /etc/apache2/mods-enabled/mpm_prefork.load && \
    ln -sf /etc/apache2/mods-available/mpm_prefork.conf /etc/apache2/mods-enabled/mpm_prefork.conf

COPY --chown=www-data:www-data . .
RUN chmod -R 755 /var/www/html

RUN echo '#!/bin/bash\n\
export PORT=${PORT:-80}\n\
sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf\n\
exec apache2-foreground' > /start.sh && chmod +x /start.sh

EXPOSE ${PORT:-80}
CMD ["/start.sh"]
