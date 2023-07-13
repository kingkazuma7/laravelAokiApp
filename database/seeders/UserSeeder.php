<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ // users table
            [
                'name' => 'ps3neito',
                'email' => 'ps3neito@yahoo.co.jp',
                'password' => Hash::make('ps3neitops3neito'),
                'created_at' => Now()
            ],
            [
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => Hash::make('password123'),
                'created_at' => Now()
            ],
        ]);
    }
}
