FROM php:8.2-apache

# ==============================
# Dependências do sistema
# ==============================
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    nodejs \
    npm

# Extensões PHP necessárias
RUN docker-php-ext-install pdo pdo_mysql zip

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ==============================
# Apache
# ==============================
RUN a2enmod rewrite

ENV APACHE_DOCUMENT_ROOT /var/www/html/public


RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf


# ==============================
# Copiar projeto
# ==============================
COPY . /var/www/html

WORKDIR /var/www/html

# ==============================
# Laravel em modo produção
# ==============================
ENV APP_ENV=production
ENV APP_DEBUG=false

# Instalar dependências PHP
RUN composer install --no-dev --optimize-autoloader

# Criar .env se não existir
RUN cp .env.example .env

# Gerar chave
RUN php artisan key:generate

# ==============================
# Banco SQLite
# ==============================
RUN mkdir -p database \
    && touch database/database.sqlite

# Rodar migrations
RUN php artisan migrate --force

# ==============================
# Build dos assets (CSS/JS)
# ==============================
RUN npm install
RUN npm run build

# ==============================
# Cache Laravel (IMPORTANTE)
# ==============================
RUN php artisan config:clear \
 && php artisan cache:clear \
 && php artisan view:clear \
 && php artisan route:clear \
 && php artisan config:cache \
 && php artisan route:cache \
 && php artisan view:cache

# ==============================
# Permissões (resolve erro storage)
# ==============================
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage \
    && chmod -R 775 bootstrap/cache

EXPOSE 80
