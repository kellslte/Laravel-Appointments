<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$4Va1BrfJuwoMgd3ceninMe9XflnI/c9/uxHUe2By8staVOTwraq5y',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
