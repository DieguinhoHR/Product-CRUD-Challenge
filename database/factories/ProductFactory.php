<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->text($maxNbChars = 200),
        'tag_id' => function () {
            return factory(\App\Models\Tag::class)->create()->id;
        },
        'image' => 'default.jpg',
        'stock' => $faker->numberBetween(1, 100)
    ];
});
