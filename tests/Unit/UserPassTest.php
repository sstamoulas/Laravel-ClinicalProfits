<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserPassTest extends TestCase
{
    public function testNewUserRegistration()
	{
        $response = $this->call('POST', '/validate', ['_token' => csrf_token(), 'authKey' => 1]);

        $this->assertEquals(200, $response->status());
	}
}
