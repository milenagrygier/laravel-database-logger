<?php

declare(strict_types=1);

namespace SchmidtMilena\DbLogger\Tests;

use SchmidtMilena\DbLogger\Models\Log;

class DbLoggingTest extends TestCase
{
    private static $message = 'Logs are stored properly in database at: ';

    /** @test */
    public function testSaveLogInDatabase(): void
    {
        $message = static::$message.''.now()->format("Y-m-d H:i:s");
        Log::factory()->create([
            'message' => $message,
        ]);
        $this->assertDatabaseHas('logs', ['message' => $message]);
    }
}
