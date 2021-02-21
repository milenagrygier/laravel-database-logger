<?php

declare(strict_types=1);

namespace SchmidtMilena\DbLogger;

use Illuminate\Support\ServiceProvider;

class DbLoggerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        if (! class_exists('CreateLogsTable')) {
            $timestamp = date('Y_m_d_His', time());


            $this->publishes([
                __DIR__ . '/../database/migrations/create_logs_table.php.stub' => database_path("/migrations/{$timestamp}_create_logs_table.php"),
            ], 'migrations');
        }
    }
}
