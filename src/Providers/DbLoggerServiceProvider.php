<?php

namespace SchmidtMilena\DbLogger\Providers;

use SchmidtMilena\DbLogger\Commands\DbLoggerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DbLoggerServiceProvider extends PackageServiceProvider
{
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
