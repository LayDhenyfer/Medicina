#!/usr/bin/env bash

echo $DB_HOST:$DB_PORT;

cd /var/www/html;

echo "-- Running composer install";
find . -name composer.json -not -path '*/wp-includes/*' -not -path '*/vendor/*' | sed -r 's/composer.json//g' |  sed -r 's/\.\///' | xargs -d $'\n' sh -c 'for arg do cd "$arg"; echo "composer em: $arg"; composer install -vvv; cd /var/www/html ; done' _ ;
##find . -name package.json -not -path '*/wp-includes/*' -not -path '*/node_modules/*' | sed -r 's/package.json//g' | xargs -d $'\n' sh -c 'for arg do cd "$arg"; npm install; done' _ ;

CONTAINER_ALREADY_STARTED="CONTAINER_ALREADY_RAN_ONCE"

dockerize -wait tcp://$DB_HOST:$DB_PORT -timeout 4000s

if [ ! -e $CONTAINER_ALREADY_STARTED ]; then
    touch $CONTAINER_ALREADY_STARTED

    echo "-- Container first time for its first time"

    chmod a+rw -R /var/www/;

	  cp wp-config.docker.php wp-config.php;
    if [ "$WEB_PORT" != "80" ]; then
	   sed -i "s/localhost/localhost:${WEB_PORT}/g" wp-config.php
    fi

    find . -name composer.json -not -path '*/wp-includes/*' -not -path '*/vendor/*' | sed -r 's/composer.json//g' | xargs -d $'\n' sh -c 'for arg do cd "$arg"; composer dump-autoload; done' _ ;

    chmod a+rw -R /var/www/;

else
    echo "-- Container already run. No need to be reconfigured"
fi

echo "-- Running services";

service nginx start && service php7.4-fpm start && /bin/bash