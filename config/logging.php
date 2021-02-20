<?php

use SchmidtMilena\DbLogger\Monolog;
use SchmidtMilena\DbLogger\Formatter;
use SchmidtMilena\DbLogger\DbLoggerHandler;

return [
    'channels' => [

        'mysql' => [
            'driver' => 'monolog',
            'via' => Monolog::class,
            'handler' => DbLoggerHandler::class,
            'formatter' => Formatter::class,
            'name' => 'mysqllogger'
        ],

    ],

];

