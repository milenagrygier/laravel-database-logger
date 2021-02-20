<?php

declare(strict_types=1);

namespace SchmidtMilena\DbLogger;

use Carbon\Carbon;
use Monolog\Formatter\NormalizerFormatter;

class Formatter extends NormalizerFormatter
{
    private const LOCALHOST = 'localhost';

    public function format(array $data): array
    {
        parent::format($data);

        return $this->formatLogArray($data);
    }

    private function formatLogArray(array $data): array
    {
        $data['ip'] = request()->server('REMOTE_ADDR');
        $data['user_agent'] = request()->server('HTTP_USER_AGENT');
        $data['instance'] = gethostname() ? gethostname() : self::LOCALHOST;
        $data['created_at'] = Carbon::parse($data['datetime'])->format('Y-m-d H:i:s');
        $data['updated_at'] = Carbon::parse($data['datetime'])->format('Y-m-d H:i:s');
        if (array_key_exists('context', $data)) {
            if (array_key_exists('exception', $data['context'])) {
                $data['context'] = $data['context']['exception'];
            } else {
                $data['context'] = json_encode($data['context']);
            }
        }

        return $data;
    }
}
