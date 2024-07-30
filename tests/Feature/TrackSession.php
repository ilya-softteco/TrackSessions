<?php

namespace CIG\TrackSession\Tests\Feature;

use CIG\TrackSession\Services\TrackSessionServices;
use Orchestra\Testbench\TestCase;


class TrackSession extends TestCase
{

    public function test_save_in_table(): void
    {

        $trackSessionObj = new TrackSessionServices();
        $data = $trackSessionObj->track();

        $this->assertEquals('Symfony', $data->user_agent);
        $this->assertNotEmpty($data->session_id);

    }

}
