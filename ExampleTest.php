<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testLogin(){
        $data = [
            'email' => 'abc@gmail.com', 
            'password' => '123456'
        ];
        $this->withoutMiddleware();
        $response = $this->post('/login', $data);

       
    }


    