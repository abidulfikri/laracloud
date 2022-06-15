FROM php:7.4-fpm-alpine

ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apk add --no-cache nginx wget && apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql

RUN mkdir -p /run/nginx

COPY docker/nginx.conf /etc/nginx/nginx.conf

RUN mkdir -p /app
COPY . /app

RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"
RUN cd /app && \
    /usr/local/bin/composer install --no-dev

RUN chown -R www-data: /app

CMD sh /app/docker/startup.sh
