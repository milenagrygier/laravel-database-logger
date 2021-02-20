<?php

declare(strict_types=1);

namespace SchmidtMilena\DbLogger;

use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;
use SchmidtMilena\DbLogger\Models\Log;

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
