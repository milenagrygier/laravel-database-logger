<?php

namespace SchmidtMilena\DbLogger;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SchmidtMilena\DbLogger\DbLogger
 */
class DbLoggerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel8-database-logger';
    }
}
