<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => "Dian Eka",
                'email' => "dianeka123@gmail.com",
                'password' => "Eka123"
            ],
            [
                'name' => "Sella",
                'email' => "sella123@gmail.com",
                'password' => "Sella345"
            ]
            ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
