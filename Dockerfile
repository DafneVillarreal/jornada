FROM php:8.1-apache

# Instala extensiones PHP necesarias, puedes agregar más según las necesidades de tu proyecto
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

# Copia los archivos de tu proyecto al directorio raíz de Apache
COPY . /var/www/html

# Establece permisos adecuados para el directorio de Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exponer el puerto 80 para el contenedor
EXPOSE 80

# Reinicia Apache para asegurarse de que está corriendo con la última configuración
CMD ["apache2-foreground"]