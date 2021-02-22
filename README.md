# Database logger for Laravel 8

The schmidtmilena/laravel8-database-logger package provides custom log handler for Laravel 8 that can store log events to SQL databases.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/schmidtmilena/laravel8-database-logger.svg?style=flat-square)](https://packagist.org/packages/schmidtmilena/laravel8-database-logger)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/schmidtmilena/laravel8-database-logger/run-tests?label=tests)](https://github.com/schmidtmilena/laravel8-database-logger/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/schmidtmilena/laravel8-database-logger/Check%20&%20fix%20styling?label=code%20style)](https://github.com/schmidtmilena/laravel8-database-logger/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/schmidtmilena/laravel8-database-logger.svg?style=flat-square)](https://packagist.org/packages/schmidtmilena/laravel8-database-logger)

## Installation

You can install the package via composer:

```bash
composer require schmidtmilena/laravel8-database-logger
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag=migrations
```

## Usage
After publishing migration run:
```php
php artisan migrate
```
Add custom driver to your logging.php file:
```php
    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['mysql'],
        ],

    // [...]
    'mysql' => [
        'driver' => 'monolog',
        'via' => SchmidtMilena\DbLogger\Monolog::class,
        'handler' => SchmidtMilena\DbLogger\DbLoggerHandler::class,
        'formatter' => SchmidtMilena\DbLogger\Formatter::class,
        'name' => 'mysqllogger'
    ],
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Milena Schmidt](https://github.com/SchmidtMilena)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
