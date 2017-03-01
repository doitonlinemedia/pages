# Brickle CMS #

## In Development ##


### Installation ###

Run: `composer require doitonlinemedia/admin`

Run: `composer dumpautoload -o`

Add: `Doitonlinemedia\Admin\App\Providers\AdminServiceProvider::class` to app.php in config folder

Run `php artisan migrate --path=vendor/doitonlinemedia/admin/src/database/migrations/`

Run `php artisan db:seed --class="Doitonlinemedia\Admin\AdminDatabaseSeeder"`

Run: `php artisan vendor:publish`

Go to /brickle to login or change the path in the admin.php config file in the config folder.

Login credentials are: admin - admin