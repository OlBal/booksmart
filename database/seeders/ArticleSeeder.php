<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    

    public function run()
    {
        $faker = Faker::create();
        $usersIDs= DB::table('users')->pluck('id');

        foreach (range(1,50) as $index) {  
        DB::table('articles')->insert([
        'title'=>'The Guardian',    
        'url'=>'http//www.theguardian.com',
        'description'=>'The Guardian news website is a source of information and daily events from around the world. ',
        'user_id'=>$faker->randomElement($usersIDs),
        ]);
    }
    }
}
