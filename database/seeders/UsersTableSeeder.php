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
        /**
         * システム管理者
         */
        DB::table('users')->insert([
            'name' => 'システム管理者',
            'email' => 'admin@inlife.work',
            'password' => bcrypt('admin'),
        ]);

        /**
         * 講師アカウント
         */
        DB::table('users')->insert([
            'name' => '講師アカウント',
            'email' => 'teacher@inlife.work',
            'password' => bcrypt('teacher'),
        ]);

        /**
         * 生徒アカウント
         */
        DB::table('users')->insert([
            'name' => '生徒アカウント',
            'email' => 'student@inlife.work',
            'password' => bcrypt('student'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'admin-access',
            'description' => 'システム管理者のみアクセス可能',
        ]);

        DB::table('permissions')->insert([
            'name' => 'teacher-access',
            'description' => '講師のみアクセス可能',
        ]);

        DB::table('permissions')->insert([
            'name' => 'student-access',
            'description' => '生徒のみアクセス可能',
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 1,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 2,
            'permission_id' => 2,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 3,
            'permission_id' => 3,
        ]);
    }
}
