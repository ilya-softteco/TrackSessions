<?php

declare(strict_types=1);

namespace CIG\TrackSession\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class TrackSessionFacade
 *
 * @package CIG\TrackS ession\Facades
 *
 *  * @method static void track()
 */
class TrackSessionFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'track.session';
    }
}
