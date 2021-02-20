<?php

namespace SchmidtMilena\DbLogger;

use Monolog\Logger;
use SchmidtMilena\DbLogger\Models\Log;
use Monolog\Handler\AbstractProcessingHandler;

class DbLoggerHandler extends AbstractProcessingHandler
{
    public function __construct($level = Logger::DEBUG)
    {
        parent::__construct($level);
    }

    protected function write(array $data) :void
    {
        Log::create($data['formatted']);
    }
}
