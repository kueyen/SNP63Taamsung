<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            //1
            [
                'name' => 'เมนูกระเพรา',
                'restaurant_id' => 1
            ]
        ]);
    }
}
