FROM php:apache
MAINTAINER CLAY whoisclay@outlook.com

# Configure /app folder with sample app
RUN rm -rf /var/www/html/*
ADD web/ /var/www/html/

#add mirror source List
ADD ./sources.list /etc/apt/sources.list

# Add init SQL data
ADD ./xss.sql /var/xss.sql

# Install mysqlimport
RUN apt-get update
RUN DEBIAN_FRONTEND=noninteractive apt-get -y install mariadb-client

RUN docker-php-ext-install mysqli

EXPOSE 80

RUN chown www-data:www-data /var/www/html -R

# Config entrypoint
ADD ./docker-entrypoint.sh /
RUN chmod +x /docker-entrypoint.sh

ENTRYPOINT ["/docker-entrypoint.sh"]