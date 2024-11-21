# Imagem base com PHP e Apache
FROM php:8.1-apache

# Instalar extensões necessárias (incluindo a extensão MySQL)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar os arquivos do projeto para o diretório do container
COPY . /var/www/html/

# Definir permissões
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Expor a porta padrão do Apache
EXPOSE 80
