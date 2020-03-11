#!/bin/sh

if [ $APP_ENV = "local" ]; then
    sed -i "s/\$SERVER_NAME/healthcheck.eggsmartpos.local/g" /etc/nginx/sites-enabled/app.conf;
    sed -i "s/\$REDIRECT_URL/healthcheck.eggsmartpos.local/g" /etc/nginx/sites-enabled/app.conf;
    sed -i "s/\$HTTP_X_FORWARDED_HOST/healthcheck.eggsmartpos.local/g" /etc/nginx/sites-enabled/app.conf;
fi

if [ $APP_ENV = "alpha" ]; then
    cp /var/www/html/.env.alpha /var/www/html/.env;
    sed -i "s/\$SERVER_NAME/alpha-healthcheck.eggsmartpos.com/g" /etc/nginx/sites-enabled/app.conf;
    sed -i "s/\$REDIRECT_URL/alpha-healthcheck.eggsmartpos.com/g" /etc/nginx/sites-enabled/app.conf;
    sed -i "s/\$HTTP_X_FORWARDED_HOST/alpha-healthcheck.eggsmartpos.com/g" /etc/nginx/sites-enabled/app.conf;
fi

if [ $APP_ENV = "staging" ]; then
    cp /var/www/html/.env.staging /var/www/html/.env;
    sed -i "s/\$SERVER_NAME/staging-healthcheck.eggsmartpos.com/g" /etc/nginx/sites-enabled/app.conf;
    sed -i "s/\$REDIRECT_URL/staging-healthcheck.eggsmartpos.com/g" /etc/nginx/sites-enabled/app.conf;
    sed -i "s/\$HTTP_X_FORWARDED_HOST/staging-healthcheck.eggsmartpos.com/g" /etc/nginx/sites-enabled/app.conf;
fi

if [ $APP_ENV = "preprod" ]; then
    sed -i "s/\$SERVER_NAME/preprod-healthcheck.eggsmartpos.com/g" /etc/nginx/sites-enabled/app.conf;
    sed -i "s/\$REDIRECT_URL/preprod-healthcheck.eggsmartpos.com/g" /etc/nginx/sites-enabled/app.conf;
    sed -i "s/\$HTTP_X_FORWARDED_HOST/preprod-healthcheck.eggsmartpos.com/g" /etc/nginx/sites-enabled/app.conf;
fi

if [ $APP_ENV = "production" ]; then
    sed -i "s/\$SERVER_NAME/healthcheck.eggsmartpos.com/g" /etc/nginx/sites-enabled/app.conf;
    sed -i "s/\$REDIRECT_URL/healthcheck.eggsmartpos.com/g" /etc/nginx/sites-enabled/app.conf;
    sed -i "s/\$HTTP_X_FORWARDED_HOST/healthcheck.eggsmartpos.com/g" /etc/nginx/sites-enabled/app.conf;
fi

# Disable nginx errorpage
if [ $APP_ENV = "local" ] || [ $APP_ENV = "alpha" ] || [ $APP_ENV = "staging" ]; then
    sed -i 's/include configs\/errorpage.conf/#include configs\/errorpage.conf/g' /etc/nginx/sites-enabled/app.conf;
fi

# Disable xdebug
if [ $APP_ENV = "preprod" ] || [ $APP_ENV = "production" ]; then
    sed -i 's/zend_extension/;zend_extension/g' /etc/php/7.3/mods-available/xdebug.ini;
    rm /var/www/html/.env.*;
fi

# Enable New Relic
if [ $APP_ENV = "production" ]; then
	sed -i 's/;extension/extension/g'/etc/php/7.3/mods-available/newrelic.ini;
fi

supervisord -n -c /etc/supervisor/supervisord.conf