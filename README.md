Étape 1 : créer un fichier docker-compose.yml

Tout d’abord, afin de pouvoir dockeriser votre application PHP, créez un fichier docker-compose.yml avec le contenu suivant :

version : '3'


services:

    php:
    
        build: .
        
        volumes: 
        
             - ./:/var/www/html
             
             - /var/log/apache2/app:/var/log/apache2/
             
        ports:
        
             - 8080:80
             
Ce fichier permettra de lancer le déploiement de votre application PHP dans un container Docker.

Etape 2 : créer un fichier Dockerfile
Ensuite, toujours à la racine de votre application PHP, créez un fichier Dockerfile avec le contenu suivant :

FROM php:8.2-apache

# PHP

RUN apt-get update && apt-get upgrade

RUN apt-get install -y zlib1g-dev libwebp-dev libpng-dev && docker-php-ext-install gd

RUN apt-get install libzip-dev -y && docker-php-ext-install zip


# Apache

RUN a2enmod rewrite

RUN service apache2 restart


EXPOSE 80

Ce fichier Dockerfile permettra de construire automatiquement une image préconfigurée pour apache et php.


Etape 3: lancer l’application sous Docker

Enfin, il ne reste plus qu’à lancer le déploiement de votre application sous Docker grâce à la commande suivante :


docker-compose up

Ça y est, vous avez réussi à dockeriser votre application PHP qui est maintenant accessible sur le port 8080 !
