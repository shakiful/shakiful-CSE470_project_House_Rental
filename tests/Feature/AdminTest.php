<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
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

     // admin
     public function testAreaTest()
     {
         $response = $this->get('/admin/area');
 
         $response->assertStatus(302);
     }
 
     public function testHouseTest()
     {
         $response = $this->get('/admin/house');
 
         $response->assertStatus(302);
     }
 
     public function testManagelandlordTest()
     {
         $response = $this->get('/admin/manage-landlord');
 
         $response->assertStatus(302);
     }
 
     public function testManagerentTest()
     {
         $response = $this->get('/admin/manage-renter');
 
         $response->assertStatus(302);
     }
 
     public function testProfileinfoTest()
     {
         $response = $this->get('/admin/profile-info');
 
         $response->assertStatus(302);
     }
 
     public function testBookedhousesTest()
     {
         $response = $this->get('/admin/booked-houses-list');
 
         $response->assertStatus(302);
     }
 
     public function testBookinghistoryTest()
     {
         $response = $this->get('/admin/booked-houses-history');
 
         $response->assertStatus(302);
     }
    
    
  
}