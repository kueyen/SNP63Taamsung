<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'first_name' => 'nattawut',
                'last_name' => 'osa',
                'email' => 'tablelable@gmail.com',
                'line_user_id' => 'U98a51562ca53bb6d5f844da8399e2a01',
                'password' => bcrypt('123456'),
                'tel' => '0921641481',
                'table_id' => 1
            ], [
                'first_name' => 'test',
                'last_name' => 'man',
                'email' => 'krit.muangnoi@gmail.com',
                'tel' => '0964096784',
                'line_user_id' => 'U08f2e0895b23efaf64acaeb60f96ef37', 'table_id' => 1, 'password' => bcrypt('123456')
            ]



        ]);
    }
}