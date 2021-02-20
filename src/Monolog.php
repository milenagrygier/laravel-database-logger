<?php

declare(strict_types=1);

namespace SchmidtMilena\DbLogger;

use Monolog\Logger;

class Monolog
{
    private const NAME = 'monolog';

    public function __invoke(array $config): void
    {
        $logger = new Logger(self::NAME);
        $logger->pushHandler(new DbLoggerHandler());
    }
}
