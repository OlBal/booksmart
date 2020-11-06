<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    foreach (range(1,10) as $index){
         DB::table('users')->insert([
             'first_name'=>$faker->firstName,
             'last_name'=>$faker->lastName,
             'email'=>$faker->email,
             'password'=>Hash::make('password'),
         ]);
        }
    }
}
