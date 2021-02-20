<?php

namespace SchmidtMilena\DbLogger\Providers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DbLoggerServiceProvider extends PackageServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations'),
        ], 'migrations');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/logging.php',
            'logging'
        );
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel8-database-logger')
            ->hasMigration('create_logs_table');
    }
}
