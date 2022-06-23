<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\DayCount;
use Tests\TestCase;
use DayCountSeeder;

class DayCountTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test thatit fetches all day counts.
     *
     * @return void
     */
    public function test_it_fetches_all_day_counts(): void
    {
        $this->seed(DayCountSeeder::class);
        $response = $this->json('GET', 'api/count/get-counts');

        $this->assertDatabaseHas('day_counts', [
            'day' => '2022-06-18 00:00:00',
        ]);
    
        $response->assertStatus(200);
    }
}
