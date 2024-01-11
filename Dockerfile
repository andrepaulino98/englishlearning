FROM php:8.1-fpm

ARG user=laravel
ARG uid=1000

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
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd sockets

# Get latest Composer
RUN curl -s https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

#Verificar Compose Installation
RUN composer diagnose

# Set working directory
WORKDIR /var/www

#Install Laravel
RUN cd $WORKDIR
RUN composer global require laravel/installer
RUN composer create-project --prefer-dist laravel/laravel englishlearning

#Copy Files

COPY . /var/www/englishlearning/

#Change permisssion
RUN chown -R laravel:laravel /var/www/englishlearning/

#Entrar no diretório da aplicação
RUN sudo -c cd /var/www/englishlearning -s /bin/bash laravel

#RUN composer install
ENTRYPOINT [ "sudo -c composer install /var/wwww/englishlearning -s /bin/bash laravel" ]


#Change user
USER $user

