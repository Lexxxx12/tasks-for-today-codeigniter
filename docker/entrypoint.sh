#!/bin/sh
set -eu

mkdir -p /var/www/html/writable
touch /var/www/html/writable/database.sqlite
chown -R www-data:www-data /var/www/html/writable

php spark migrate --all --no-header

USER_COUNT="$(php -r '$db = new SQLite3("writable/database.sqlite"); echo $db->querySingle("SELECT COUNT(*) FROM users");')"
if [ "$USER_COUNT" = "0" ]; then
    php spark db:seed AppSeeder
fi

exec "$@"
