<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LandlordTest extends TestCase
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

     // LandLord
    public function testLandlorddashboardTest()
    {
        $response = $this->get('/landlord/dashboard');

        $response->assertStatus(302);
    }

    public function testLandlordareaTest()
    {
        $response = $this->get('/landlord/area');

        $response->assertStatus(302);
    }

    public function testLandlordhouseTest()
    {
        $response = $this->get('/landlord/house');

        $response->assertStatus(302);
    }

    public function testLandlord_profile_infoTest()
    {
        $response = $this->get('/landlord/profile-info');

        $response->assertStatus(302);
    }

    public function testLandlord_bookingrequestTest()
    {
        $response = $this->get('/landlord/booking-request-list');

        $response->assertStatus(302);
    }

    public function testLandlord_bookedhouseTest()
    {
        $response = $this->get('/landlord/booked/currently/renter');

        $response->assertStatus(302);
    }

    public function testLandlord_bookinghistoryTest()
    {
        $response = $this->get('/landlord/booking/history');

        $response->assertStatus(302);
    }
    
  
}