<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        DB::table('users')->insert([
            'full_name' => 'Super Man',
            'address' => 'address',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('123123'),
            'status' => 1,
            'user_type_id' => 1,
        ]);
        DB::table('users')->insert([
            'full_name' => 'Creator',
            'address' => 'address',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('123123'),
            'status' => 1,
            'user_type_id' => 2,
        ]);
        DB::table('users')->insert([
            'full_name' => 'Seller',
            'address' => 'address',
            'email' => 'user3@gmail.com',
            'password' => Hash::make('123123'),
            'status' => 1,
            'user_type_id' => 3,
        ]);
    }
}
