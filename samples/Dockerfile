FROM php:7.3-cli

RUN apt-get update; \
    curl -sL https://deb.nodesource.com/setup_12.x | bash -; \
    apt-get install -y --no-install-recommends \
        git \
        libzip-dev \
        nodejs \
        unzip \
        zlib1g-dev \
    ; \
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install zip

WORKDIR /tmp

RUN curl https://raw.githubusercontent.com/composer/getcomposer.org/76a7060ccb93902cd7576b67264ad91c8a2700e2/web/installer -o - -s | php -- --quiet; \
    mv composer.phar /usr/local/bin/composer

WORKDIR /usr/src/app

RUN composer global require laravel/installer

ENV PATH /root/.composer/vendor/bin:$PATH

EXPOSE 8000
