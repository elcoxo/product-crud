<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('12345'),
                'role_id' => 0,
            ],
            [
                'name' => 'User',
                'email' => 'user_unknown@user.com',
                'password' => bcrypt('12345'),
                'role_id' => 1,
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@user.com',
                'password' => bcrypt('12345'),
                'role_id' => 2,
            ],

        ];

        DB::table('users')->insert($data);
    }
}
