FROM php:8.2-apache

# Устанавливаем mysqli
RUN docker-php-ext-install mysqli

# Копируем файлы
COPY . /var/www/html/

# Правильные права
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html
