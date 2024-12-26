<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'システム管理者',
            'email' => 'admin@inlife.work',
            'password' => bcrypt('admin'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'admin-access',
            'description' => 'システム管理者のみアクセス可能',
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 1,
        ]);
    }
}
