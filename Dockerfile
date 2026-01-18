FROM php:8.3-apache

WORKDIR /var/www/html

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git unzip libzip-dev && \
    docker-php-ext-install zip && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Completely remove all MPM modules and reinstall only mpm_prefork
RUN a2dismod mpm_event mpm_worker mpm_prefork || true && \
    rm -f /etc/apache2/mods-enabled/mpm_*.load \
    /etc/apache2/mods-enabled/mpm_*.conf && \
    a2enmod mpm_prefork

COPY ./config/apache-config.conf /etc/apache2/sites-available/l-asso-website.conf
RUN a2enmod rewrite headers expires
RUN echo 'ServerName localhost' >> /etc/apache2/apache2.conf && \
    a2dissite 000-default.conf && \
    a2ensite l-asso-website.conf

COPY composer.json composer.lock ./

RUN composer install --no-dev --optimize-autoloader --no-interaction

COPY --chown=www-data:www-data . .
RUN chmod -R 755 /var/www/html

# Create startup script that handles PORT and ensures clean MPM state
RUN echo '#!/bin/bash\n\
set -e\n\
# Remove any stray MPM modules\n\
rm -f /etc/apache2/mods-enabled/mpm_event.load /etc/apache2/mods-enabled/mpm_event.conf\n\
rm -f /etc/apache2/mods-enabled/mpm_worker.load /etc/apache2/mods-enabled/mpm_worker.conf\n\
# Ensure only mpm_prefork is enabled\n\
if [ ! -f /etc/apache2/mods-enabled/mpm_prefork.load ]; then\n\
  ln -s /etc/apache2/mods-available/mpm_prefork.load /etc/apache2/mods-enabled/mpm_prefork.load\n\
fi\n\
if [ ! -f /etc/apache2/mods-enabled/mpm_prefork.conf ]; then\n\
  ln -s /etc/apache2/mods-available/mpm_prefork.conf /etc/apache2/mods-enabled/mpm_prefork.conf\n\
fi\n\
# Handle PORT variable\n\
export PORT=${PORT:-80}\n\
echo "Configuring Apache to listen on port $PORT"\n\
# Update ports.conf to listen on the correct port\n\
echo "Listen $PORT" > /etc/apache2/ports.conf\n\
# Update the VirtualHost configuration\n\
sed -i "s/<VirtualHost \*:80>/<VirtualHost *:$PORT>/" /etc/apache2/sites-available/l-asso-website.conf\n\
# Start Apache\n\
exec apache2-foreground' > /start.sh && chmod +x /start.sh

EXPOSE 80
CMD ["/start.sh"]
