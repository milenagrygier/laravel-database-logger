<?php

declare(strict_types=1);

namespace SchmidtMilena\DbLogger\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Schema;
use Orchestra\Testbench\TestCase as Orchestra;
use SchmidtMilena\DbLogger\DbLoggerServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'SchmidtMilena\\DbLogger\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app): array
    {
        return [
            DbLoggerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        Schema::dropIfExists('logs');

        include_once __DIR__.'/../database/migrations/create_logs_table.php.stub';
        (new \CreateLogsTable())->up();
    }
}
