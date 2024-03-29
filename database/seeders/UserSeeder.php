<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData =[
            [
            "name"=> "admin",
            "email"=> "admin@gmail.com",
            "password"=> Hash::make("admin"),
            "role"=> "admin",
            ],
            
            [
            "name"=> "kasir",
            "email"=> "kasir@gmail.com",
            "password"=> Hash::make("kasir"),
            "role"=> "kasir",
            ],
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
}
    }
}
