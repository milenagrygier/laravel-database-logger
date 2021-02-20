<?php

namespace SchmidtMilena\DbLogger;

use Monolog\Logger;

class Monolog
{
    public function __invoke(array $config)
    {
        $logger = new Logger('monolog');
        $logger->pushHandler(new DbLoggerHandler());
    }
}
