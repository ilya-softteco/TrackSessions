<?php

declare(strict_types=1);

namespace CIG\TrackSession\Models;

use Illuminate\Database\Eloquent\Model;

class TrackSession extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'track_sessions';
}
