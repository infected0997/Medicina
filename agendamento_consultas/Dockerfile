FROM php:8.1-apache
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html
RUN docker-php-ext-install mysqli
RUN apt-get update && apt-get install -y libmysqlclient-dev && docker-php-ext-install pdo pdo_mysql
EXPOSE 80
