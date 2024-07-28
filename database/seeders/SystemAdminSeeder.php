<?php

namespace Database\Seeders;

use App\Models\Province;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SystemAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'admin',
            'job' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'status' => '1',
            'is_admin' => '1',
        ]);

//        User::create([
//            'name' => 'Admin',
//            'email' => 'Admin@email.com',
//            'password' => bcrypt('password'),
////            'is_admin' => '1',
////            'province_id' => '1',
////            'status' => '1',
//        ]);
//        Province::create([
//            'parent_id'=> null,
//            'province'=> 'زون پایتخت',
//        ]);
//        $roles = [
//            ['role' => 'view-case'],
//            ['role' => 'update-case'],
//        ];
//        Role::insert($roles);
    }
}
