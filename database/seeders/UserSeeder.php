<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(['name'=>'admin', 'email'=>'admin@gmail.com', 'password'=> Hash::make('admin')]);
        DB::table('users')->insert(['name'=>'editor', 'email'=>'editor@gmail.com', 'password'=> Hash::make('editor')]);
        DB::table('users')->insert(['name'=>'user', 'email'=>'user@gmail.com', 'password'=> Hash::make('user')]);
//        User::create(['name'=>'admin', 'email'=>'admin@gmail.com', 'password'=> Hash::make('admin')]);
//        User::create(['name'=>'editor', 'email'=>'editor@gmail.com', 'password'=> Hash::make('editor')]);
//        User::create(['name'=>'user', 'email'=>'user@gmail.com', 'password'=> Hash::make('user')]);
    }
}
