# Install

- `composer install`
- `composer dump-autoload --no-dev --classmap-authoritative`
- `bin/console cache:warmup` (or `bin/console cache:clear` if you have cache already)
- `docker-compose up -d --build -V`

# Test
- `http://localhost:8001` - with opcache preload
- `http://localhost:8002` - without opcache preload
