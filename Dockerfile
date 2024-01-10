FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN apt install -y php-mbstring php-xml php-fpm php-zip php-common php-fpm php-cli unzip curl nginx

# Get latest Composer
RUN curl -s https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

#Verificar Compose Installation
RUN composer diagnose

# Set working directory
WORKDIR /var/www

#Install Laravel
RUN cd $WORKDIR
RUN composer global require laravel/installer
RUN composer create-project --prefer-dist laravel/laravel englishlearning

#Copy Files

COPY . $WORKDIR/englishlearning/