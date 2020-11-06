<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $articlesIDs= DB::table('articles')->pluck('id');
        $usersIDs= DB::table('users')->pluck('id');



        foreach (range(1,5) as $index){
         DB::table('boards')->insert([
            'title'=>$faker->sentence(3),
            'description'=>$faker->paragraph(1),
            'user_id'=>$faker->randomElement($usersIDs),
            'article_id'=>$faker->randomElement($articlesIDs),
         ]);
         }
    }
}
