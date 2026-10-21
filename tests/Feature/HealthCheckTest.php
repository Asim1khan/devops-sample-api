<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HealthCheckTest extends TestCase
{
    /**
     * A basic feature test example.
     */


     public function test_health_endpoint_returns_successful_response(): void
    {
        //asdsdsds
    $response = $this->getJson('/api/health');

        $response->assertOk()
            ->assertExactJson([
                'status' => 'ok',
                'message' => 'API is running',
            ]);
    }
    
}
