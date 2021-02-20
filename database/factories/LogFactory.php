<?php

declare(strict_types=1);

namespace SchmidtMilena\DbLogger\Database\Factories;

use SchmidtMilena\DbLogger\Models\Log;
use Illuminate\Database\Eloquent\Factories\Factory;

class LogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Log::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'message' => 'test',
            'level_name' => 'info',
            'level' => '200',
            'instance' => gethostname(),
            'channel' => 'testing',
            'created_at' => now()->format("Y-m-d H:i:s")
        ];
    }
}
