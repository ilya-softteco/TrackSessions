<?php

declare(strict_types=1);

namespace CIG\TrackSession\Services;

use CIG\TrackSession\Models\TrackSession;

class TrackSessionServices
{
    public function track(): void
    {
        TrackSession::updateOrCreate(
            [
                'session_id' => session()->getId()
            ],
            [
                'session_id' => session()->getId(),
                'user_agent' => request()->header('User-Agent'),
            ]
        );
    }
}
