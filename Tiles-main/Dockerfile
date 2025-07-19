
# Use an official PHP runtime as the base image
FROM php:8.0-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Update package information and install the MariaDB development library
RUN apt-get update -y && apt-get install -y libmariadb-dev

# Install the mysqli PHP extension
RUN docker-php-ext-install mysqli
