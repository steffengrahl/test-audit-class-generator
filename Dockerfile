FROM php:8.0-cli-alpine

# Installiere Systemabhängigkeiten für Composer
RUN apk add --no-cache \
    git \
    unzip \
    libzip-dev \
    zip

# Installiere PHP-Erweiterungen (z.B. zip)
RUN docker-php-ext-install zip

# Installiere Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Setze Arbeitsverzeichnis
WORKDIR /app

# Standardbefehl
CMD ["php", "-a"]
