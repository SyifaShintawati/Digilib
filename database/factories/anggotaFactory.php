<?php

use Faker\Generator as Faker;

$factory->define(App\anggota::class, function (Faker $faker) {
    return [
        'no_agt' => $faker->unique()->safeNo_agt,
        'nm_agt' => $faker->nm_agt,
        'alamat' => $faker->alamat,
        'kota' => $faker->kota,
        'tlp' => $faker->tlp,
    ];
});
