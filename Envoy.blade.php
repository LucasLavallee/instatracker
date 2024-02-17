@servers(['localhost' => '127.0.0.1'])

@story('web-local-setup')
composer
link
cache
yarn-dev
@endstory

@story('web-production-setup')
down
composer
migrate
link
cache
up
@endstory

@task('composer')
composer install
@endtask

@task('up')
php artisan up
@endtask

@task('yarn-dev')
yarn
yarn build
@endtask

@task('down')
php artisan down --retry=300
@endtask

@task('migrate')
php artisan migrate --force
@endtask

@task('link')
php artisan storage:link
@endtask

@task('cache')
php artisan cache:clear
php artisan view:cache
php artisan route:cache
php artisan config:cache
@endtask
