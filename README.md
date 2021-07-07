fork repo
git clone
composer install
Kopieer .env.example > .env
php artisan key:generate
maak database in phpmyadmin (verder leeg laten)
php artisan migrate:fresh
php artisan serve
