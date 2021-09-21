<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLogin(){

        $this->visit('/auth/login')
         ->type('mylogin', 'login')
         ->type('mypassword', 'password')
         ->press('Login')
         ->seePageIs('/home');
    }
}