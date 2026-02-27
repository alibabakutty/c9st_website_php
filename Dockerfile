FROM php:8.2-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy project files to Apache directory
COPY . /var/www/html/

# Allow .htaccess
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

EXPOSE 80