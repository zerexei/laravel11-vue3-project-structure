# Laravel 11 + Vue 3 Project Setup

## Packages
- https://laravel.com
- https://vuejs.org
- https://tailwindcss.com

- https://jetstream.laravel.com

## Production
```
composer install --optimize-autoloader --no-dev

php artisan config:cache
php artisan event:cache
php artisan route:cache
php artisan view:cache

php artisan optimize
```
*.env*
```
APP_ENV=production
APP_DEBUG=false

```

### Laravel schedule
- * * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1

*Notes*
- Compress Images
- Use a CDN
- Minimize JS and CSS Code