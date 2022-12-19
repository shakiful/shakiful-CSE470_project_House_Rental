<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    
    
    public function testLoginTest()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testRegisterTest()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testAllhousesTest()
    {
        $response = $this->get('/all-available/houses');

        $response->assertStatus(200);
    }

}