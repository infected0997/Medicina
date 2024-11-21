# Usando uma imagem PHP com Apache
FROM php:7.4-apache

# Instalar extensões necessárias
RUN docker-php-ext-install pdo pdo_mysql

# Copiar os arquivos do site para o diretório do Apache
COPY . /var/www/html/

# Expor a porta 80
EXPOSE 80
