# Install

## Code Quality Larastan

```shell
composer require --dev larastan/larastan
composer require --dev phpat/phpat
touch phpstan.neon
````

## PHP CodeSniffer

```shell
composer  require --dev "squizlabs/php_codesniffer"
touch phpcs.xml
```

## PSALM

```yaml
+        "psalm/plugin-laravel": "^v2.11.0",
+        "psalm/plugin-phpunit": "^0.19.0",
+        "vimeo/psalm": "^5.25.0",
-        "phpunit/phpunit": "^10.0"
```

````shell
./vendor/bin/psalm --init
composer require --dev "psalm/plugin-mockery"
./vendor/bin/psalm-plugin enable psalm/plugin-mockery
./vendor/bin/psalm-plugin enable psalm/plugin-phpunit
./vendor/bin/psalm-plugin enable psalm/plugin-laravel
````

## PHPPMD

```yaml
{
    "require-dev": {
        "phpmd/phpmd" : "@stable"
    }
}
```

## Security

```shell
composer require "graham-campbell/security:^11.2"
php artisan vendor:publish --provider="GrahamCampbell\Security\SecurityServiceProvider"
```



