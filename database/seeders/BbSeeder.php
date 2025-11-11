<?php

namespace Database\Seeders;

use App\Models\Bb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Bbs')->insert(['title'=>'Холодильник', 'content'=>'Новий холодильник', 'price'=>2000, 'user_id'=>1]);
        DB::table('Bbs')->insert(['title'=>'Телевізор', 'content'=>'Телевізор Panasonic', 'price'=>4000, 'user_id'=>1]);
        DB::table('Bbs')->insert(['title'=>'Пилесос', 'content'=>'Пилесос Roventa', 'price'=>3000, 'user_id'=>1]);
        DB::table('Bbs')->insert(['title'=>'Шафа', 'content'=>'Шафа платяна', 'price'=>1000, 'user_id'=>2]);
        DB::table('Bbs')->insert(['title'=>'Кіт', 'content'=>'Старий кіт', 'price'=>5000, 'user_id'=>2]);
        DB::table('Bbs')->insert(['title'=>'Сірники', 'content'=>'Коробка сірників', 'price'=>50, 'user_id'=>2]);
        DB::table('Bbs')->insert(['title'=>'Стіл', 'content'=>'Новий стіл', 'price'=>500, 'user_id'=>3]);
        DB::table('Bbs')->insert(['title'=>'Стул', 'content'=>'Новий стул', 'price'=>350, 'user_id'=>3]);

//        Bb::create(['title'=>'Холодильник', 'content'=>'Новий холодильник', 'price'=>2000, 'user_id'=>1]);
//        Bb::create(['title'=>'Телевізор', 'content'=>'Телевізор Panasonic', 'price'=>4000, 'user_id'=>1]);
//        Bb::create(['title'=>'Пилесос', 'content'=>'Пилесос Roventa', 'price'=>3000, 'user_id'=>1]);
//        Bb::create(['title'=>'Шафа', 'content'=>'Шафа платяна', 'price'=>1000, 'user_id'=>2]);
//        Bb::create(['title'=>'Кіт', 'content'=>'Старий кіт', 'price'=>5000, 'user_id'=>2]);
//        Bb::create(['title'=>'Сірники', 'content'=>'Коробка сірників', 'price'=>50, 'user_id'=>2]);
//        Bb::create(['title'=>'Стіл', 'content'=>'Новий стіл', 'price'=>500, 'user_id'=>3]);
//        Bb::create(['title'=>'Стул', 'content'=>'Новий стул', 'price'=>350, 'user_id'=>3]);
    }
}
