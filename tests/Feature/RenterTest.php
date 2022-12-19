<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RenterTest extends TestCase
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

    // renter
    public function testRenter_dashboardTest()
    {
        $response = $this->get('/renter/dashboard');

        $response->assertStatus(302);
    }

    public function testRenter_areasTest()
    {
        $response = $this->get('/renter/areas');

        $response->assertStatus(302);
    }

    public function testRenter_profileTest()
    {
        $response = $this->get('/renter/profile-info');

        $response->assertStatus(302);
    }

    public function testRenter_housesTest()
    {
        $response = $this->get('/renter/houses');

        $response->assertStatus(302);
    }

    public function testRenter_historyTest()
    {
        $response = $this->get('/renter/booking/history');

        $response->assertStatus(302);
    }

    public function testRenter_pendingbookingTest()
    {
        $response = $this->get('/renter/pending/booking');

        $response->assertStatus(302);
    }
}
