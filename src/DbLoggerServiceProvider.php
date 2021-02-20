<?php

namespace SchmidtMilena\DbLogger;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SchmidtMilena\DbLogger\Commands\DbLoggerCommand;

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
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel8_database_logger_table')
            ->hasCommand(DbLoggerCommand::class);
    }
}
