#!/usr/bin/env bash



while true; do
    sleep 5
    php artisan telegram:getupdates
done


