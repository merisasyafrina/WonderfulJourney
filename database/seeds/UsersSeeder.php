<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Member',
                'email' => 'member@gmail.com',
                'phone' => '0812345678',
                'role' => 'member',
                'password' => bcrypt('member123')
            ], 
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'phone' => '0812345678',
                'role' => 'admin',
                'password' => bcrypt('admin123')
            ]
        ]);
    }
}
