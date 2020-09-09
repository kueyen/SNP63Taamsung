<?php

use Illuminate\Database\Seeder;
use App\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::insert([
            //1
            [
                'name' => 'ข้าวกระเพราไก่',
                'description' => 'ไก่',
                'image_url' => 'https://s.isanook.com/wo/0/rp/rc/w700h366/yacxacm1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL3dvLzAvdWQvMTYvODI3MTcvODI3MTctdGh1bWJuYWlsLmpwZw==.jpg',
                'is_recommend' => 1,
                'price' => 50.00,
                'discount' => 5,
                'category_id' => 1,
            ]
        ]);
    }
}
