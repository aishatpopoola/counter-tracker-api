<?php

use Illuminate\Database\Seeder;
use App\DayCount;

class DayCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DayCount::create([
            'day' => '2022-06-18 00:00:00',
            'count' => 3188,
            'status' => false,
            'created_at' => '2022-06-18 15:45:04',
            'updated_at' => '2022-06-18 15:45:54',
        ]);

        DayCount::create([
            'day' => '2022-06-19 00:00:00',
            'count' => 3183,
            'status' => false,
            'created_at' => '2022-06-19 15:45:04',
            'updated_at' => '2022-06-19 15:45:54',
        ]);

        DayCount::create([
            'day' => '2022-06-20 00:00:00',
            'count' => 3335,
            'status' => false,
            'created_at' => '2022-06-20 15:45:04',
            'updated_at' => '2022-06-20 15:45:54',
        ]);

        DayCount::create([
            'day' => '2022-06-21 00:00:00',
            'count' => 3188,
            'status' => true,
            'created_at' => '2022-06-21 15:45:04',
            'updated_at' => '2022-06-21 15:45:54',
        ]);
    }
}
