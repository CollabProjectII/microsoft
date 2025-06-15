# Use an official PHP image with Apache
FROM php:8.2-apache

# Copy project files into the container
COPY . /var/www/html/

# Enable mod_rewrite if needed
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80
