<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            ['name' => 'AkunAdmin', 'email' => 'admin@gmail.com', 'level' => 'admin', 'password' =>'123456'],
            ['name' => 'AkunUser1', 'email' => 'user1@gmail.com', 'level' => 'user', 'password' => '123456'],
            ['name' => 'AkunUser2', 'email' => 'user2@gmail.com', 'level' => 'user', 'password' => '123456'],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
