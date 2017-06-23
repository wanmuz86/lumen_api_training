<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for ($i = 0; $i <=10; $i++) {
        	$user = User::create([ 
        		'name' => $faker->name,
        		'email' => $faker->email,
        		'avatar_url' => $faker->imageUrl($width = 640, $height = 480),
        		'password' =>$faker->password,
    ]);
    }
}
}
