<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'role_id' => 1,
                'email' => 'admin@mailinator.com',
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email_verified_at' => Carbon::now()
            ],
            [
                'name' => 'user',
                'role_id' => null,
                'email' => 'user@mailinator.com',
                'password' => bcrypt('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email_verified_at' => Carbon::now()
            ],
            [
                'name' => 'user',
                'role_id' => null,
                'email' => 'trinhcanhphuc@gmail.com',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email_verified_at' => Carbon::now()
            ]
        ];
        DB::table('users')->insert($users);
    }
}

