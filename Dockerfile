# Use an official PHP runtime with Apache
FROM php:8.2-apache

# Enable Apache mod_rewrite for .htaccess support
RUN a2enmod rewrite

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container
COPY . /var/www/html/

# Set correct permissions for Apache
RUN chown -R www-data:www-data /var/www/html

# The default Apache port is 80, which Render will detect.
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
