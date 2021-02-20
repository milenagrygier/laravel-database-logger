<?php

namespace SchmidtMilena\DbLogger\Commands;

use Illuminate\Console\Command;

class DbLoggerCommand extends Command
{
    public $signature = 'laravel8-database-logger';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
