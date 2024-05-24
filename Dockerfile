# Utiliser une image PHP officielle avec Apache
FROM php:8.1-apache

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Copier le code source de l'application dans le conteneur
COPY ./poleit-site /var/www/html/

# Donner les droits à Apache sur le dossier de l'application
RUN chown -R www-data:www-data /var/www/html/

# Exposer le port 80
EXPOSE 80
