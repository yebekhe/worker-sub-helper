FROM php:8.1.17-apache-bullseye

RUN apt-get update && apt-get install -y --no-install-recommends git

# Install PHP & Composer
RUN apt update -y && DEBIAN_FRONTEND=noninteractive apt install -y curl git unzip && \
  cd ~ && \
  curl -sS https://getcomposer.org/installer -o composer-setup.php && \
  php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
  composer --version


# Install Node v16 and NPM (which is needed for the LSP)
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - && \
  apt update -y && apt install -y nodejs

EXPOSE 8080
