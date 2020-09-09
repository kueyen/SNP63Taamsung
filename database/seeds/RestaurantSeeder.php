<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::insert([
            // 1
            [
                'name' => 'ร้านค้า1',
                'profile_url' => '/images/restaurant/s1.png',
                'description' => 'lorem',
                'key' => 's1'
            ]
        ]);
    }
}
