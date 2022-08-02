<?php

namespace Database\Factories;

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;





/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
$factory->define(Post::class, function (Faker $faker){
    return [
        'user_id' => 1,
        'title' => $faker->sentence,
        'body' => $faker->text(800),
    ];
});



    