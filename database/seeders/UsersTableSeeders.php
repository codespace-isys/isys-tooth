<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'image' => 'default.png',
                'address' => 'empty',
                'phone' => 'empty',
                'password' => Hash::make('admin'),
                'role_id'  => '1',
            ],
            [
                'name' => 'doctor',
                'email' => 'doctor@gmail.com',
                'image' => 'default.png',
                'address' => 'empty',
                'phone' => 'empty',
                'password' => Hash::make('doctor'),
                'role_id'  => '2',
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'image' => 'default.png',
                'address' => 'empty',
                'phone' => 'empty',
                'password' => Hash::make('user'),
                'role_id'  => '3',
            ],
        ];
        foreach ($data as $value) {
            DB::table('users')->insert([
                'name' => $value['name'],
                'email' => $value['email'],
                'image' => $value['image'],
                'address' => $value['address'],
                'phone' => $value['phone'],
                'password' => $value['password'],
                'role_id' => $value['role_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
