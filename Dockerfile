FROM php:8.1-apache
COPY index.php /var/www/html/index.php
COPY health.php /var/www/html/health.php
EXPOSE 80
