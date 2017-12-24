<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    $factory->define(App\User::class, function (Faker\Generator $faker){
    	// static $password:

    	// return [
    	//     'name'=> $faker->name,
    	//     'email'=> $faker->safeEmail,
    	//     'password'=> $password ?: $password = bcrypt('secret'),
    	//     'remember_token' => str_random(10),
    	// ];

    		return [
    			'name' => $faker->firstName,
    		];


    });
}
