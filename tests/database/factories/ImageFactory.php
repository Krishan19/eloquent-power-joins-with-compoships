<?php

use Carbon\Carbon;
use KitLoong\PowerJoins\Tests\Models\Post;
use KitLoong\PowerJoins\Tests\Models\Image;

$factory->define(Image::class, function (Faker\Generator $faker) {
    return [
        'cover' => false,
    ];
});

$factory->state(Image::class, 'owner:post', [
    'imageable_type' => Post::class,
    'imageable_id' => function () {
        return factory(Post::class)->create()->id;
    },
]);

$factory->state(Image::class, 'cover', [
    'cover' => 1,
]);
