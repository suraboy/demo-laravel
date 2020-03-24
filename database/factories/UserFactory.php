<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'name' => $faker->name,
        'last_name' => $faker->userName,
        'nick_name' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'), // secret
        'action_token' => bcrypt('secret'), // secret
        'remember_token' => str_random(10),
        'pin' => str_random(10),
        'verify' => $faker->randomElement(['waiting','yes','no']),
        'verify_date' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'mobile' => $faker->numberBetween($min = 1, $max = 9999999999),
        'type' => $faker->randomElement(['owner','staff','other','admin','customer']),
        'status' => $faker->randomElement(['active','inactive','ban']),
        'user_group_id' => factory(App\Models\UserGroup::class)->create()->id,
    ];
});
