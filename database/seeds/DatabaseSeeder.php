<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('vp_user')->insert(
            
            [
                'name' => 'admin1',
                'email' => 'xuandanh0401@gmail.com',
                'password' => bcrypt('danhpro100'),
            ]
        );
    }
}
