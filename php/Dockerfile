# Utilise l'image officielle de PHP avec FPM et Alpine
FROM php:7-fpm-alpine

# Installe les dépendances nécessaires et Sendmail
RUN apk update && \
    apk add --no-cache \
        zlib-dev libzip-dev msmtp

# Configure Sendmail avec msmtp
RUN echo "sendmail_path = /usr/bin/msmtp -t" > /usr/local/etc/php/conf.d/sendmail.ini

# Installe les extensions PHP nécessaires
RUN docker-php-ext-install pdo_mysql zip

# Ajoute une configuration msmtp basique
RUN echo "defaults" > /etc/msmtprc && \
    echo "auth           off" >> /etc/msmtprc && \
    echo "tls            off" >> /etc/msmtprc && \
    echo "tls_trust_file /etc/ssl/certs/ca-certificates.crt" >> /etc/msmtprc && \
    echo "syslog         LOG_MAIL" >> /etc/msmtprc && \
    echo "account default" >> /etc/msmtprc && \
    echo "host localhost" >> /etc/msmtprc && \
    echo "port 25" >> /etc/msmtprc && \
    echo "from root@localhost" >> /etc/msmtprc

# Ajoute les commandes pour mettre à jour /etc/hosts dans l'entrypoint
RUN sed -i '/#!\/bin\/ash/aservice sendmail restart' /usr/local/bin/docker-php-entrypoint
RUN sed -i '/#!\/bin\/ash/aecho "$(hostname -i)\t$(hostname) $(hostname).localhost" >> /etc/hosts' /usr/local/bin/docker-php-entrypoint
