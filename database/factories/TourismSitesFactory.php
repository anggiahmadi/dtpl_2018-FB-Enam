<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TourismSite;
use Faker\Generator as Faker;

$factory->define(TourismSite::class, function (Faker $faker) {
    return [
        [
            'code' => $faker->uuid,
            'name' => 'Kepulauan Seribu',
            'default_picture' => 'images/pariwisata/Kepulauan-Seribu.jpg',
            'location' => 'Jakarta',
            'desc' => 'Kepulauan Seribu',
            'price' => 10000
        ],
        [
            'code' => $faker->uuid,
            'name' => 'Kepulauan Seribu',
            'default_picture' => 'images/pariwisata/Kepulauan-Seribu.jpg',
            'location' => 'Jakarta',
            'desc' => 'Kepulauan Seribu',
            'price' => 10000
        ],
        [
            'code' => $faker->uuid,
            'name' => 'Kepulauan Seribu',
            'default_picture' => 'images/pariwisata/Kepulauan-Seribu.jpg',
            'location' => 'Jakarta',
            'desc' => 'Kepulauan Seribu',
            'price' => 10000
        ],
        [
            'code' => $faker->uuid,
            'name' => 'Kepulauan Seribu',
            'default_picture' => 'images/pariwisata/Kepulauan-Seribu.jpg',
            'location' => 'Jakarta',
            'desc' => 'Kepulauan Seribu',
            'price' => 10000
        ]
    ];
});
