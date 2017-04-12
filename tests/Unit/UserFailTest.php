<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserFailTest extends TestCase
{
	public function testNewUserRegistration()
	{
        $response = $this->post('/validate', ['_token' => csrf_token(), 'authKey' => 0]);

        $this->assertEquals(403, $response->status());
	}
}
