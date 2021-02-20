<?php

declare(strict_types=1);

namespace SchmidtMilena\DbLogger\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id,
 * @property string $instance,
 * @property string $channel,
 * @property string $remote_addr,
 * @property string $user_agent,
 * @property int $level,
 * @property string $message,
 * @property string $context,
 * @property Carbon $created_at,
 * @property int $created_by,
 * @property string $user_id,
 */
class Log extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'logs';

    protected $fillable = [
        'instance',
        'channel',
        'remote_addr',
        'user_agent',
        'level',
        'level_name',
        'message',
        'context',
        'created_at',
        'created_by',
        'user_id',
    ];

    protected $casts = [
        'id' => 'int',
        'instance' => 'string',
        'channel' => 'string',
        'remote_addr' => 'string',
        'user_agent' => 'string',
        'level' => 'string',
        'message' => 'string',
        'context' => 'string',
        'created_at' => 'datetime',
        'created_by' => 'int',
        'user_id' => 'int',
    ];
}
