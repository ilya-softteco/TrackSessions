<?php

namespace CIG\TrackSession\Facades;


use CIG\TrackSession\Services\TrackSessionServices;
use Illuminate\Support\Facades\Facade;

class TrackSessionFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return TrackSessionServices::class;
    }
}