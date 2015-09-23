<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    $faker->addProvider(new \App\Faker\Pessoa($faker));
    return [
        'name' => trim($faker->name), //Trim para retirar espaço em branco pq retiramos os titulos de pessoas
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Projeto::class, function (Faker\Generator $faker) {
    return [
        'descricao' => $faker->sentence(),
        'apagado' => $faker->boolean(0),
        'cancelado' => $faker->boolean(0)
    ];
});