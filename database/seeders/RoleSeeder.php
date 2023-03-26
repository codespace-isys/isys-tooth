<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Schema::disableForeignKeyConstrains();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['role' => 'Admin'],
            ['role' => 'Dokter'],
            ['role' => 'User'],
        ];

        foreach ($data as $value) {
            Role::insert([
                'role' => $value['role'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
