composer dump-autoload
 
php artisan migrate:fresh --path=database/migrations/base/ --force


php artisan passport:install
php artisan key:generate

php artisan db:seed --class=DevSeeder
