# Database logger for Laravel 8

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
php artisan vendor:publish --provider="SchmidtMilena\DbLogger\Providers\DbLoggerServiceProvider" --tag="laravel8-database-logger-migrations"
php artisan migrate
```

## Usage

```php
$laravel8-database-logger = new SchmidtMilena\DbLogger();
echo $laravel8-database-logger->echoPhrase('Hello, SchmidtMilena!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Milena Schmidt](https://github.com/SchmidtMilena)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
