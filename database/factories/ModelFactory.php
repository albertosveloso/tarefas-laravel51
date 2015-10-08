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


$factory->define(App\Necessidade::class, function (Faker\Generator $faker) {
    return [
        'descricao' => $faker->sentence(),
        'prioridade' => $faker->numberBetween($min = 1, $max = 10),
        'apagado' => $faker->boolean(0),
        'cancelado' => $faker->boolean(0),
        'projeto_id' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
 

$factory->define(App\StatusTarefa::class, function (Faker\Generator $faker) {
    return [
        'descricao' => $faker->sentence(),
        'apagado' => $faker->boolean(0),
        'cancelado' => $faker->boolean(0)
    ];
});

$factory->define(App\TiposTarefa::class, function (Faker\Generator $faker) {
    return [
        'descricao' => $faker->sentence(),
        'apagado' => $faker->boolean(0),
        'cancelado' => $faker->boolean(0)
    ];
});

$factory->define(App\StatusTarefa::class, function (Faker\Generator $faker) {
    return [
        'descricao' => $faker->sentence(),
        'apagado' => $faker->boolean(0),
        'cancelado' => $faker->boolean(0)
    ];
});

$factory->define(App\Tarefa::class, function (Faker\Generator $faker) {
    return [
        'descricao' => $faker->sentence(),
        'apagado' => $faker->boolean(0),
        'cancelado' => $faker->boolean(0),
        'tempoestimado' => $faker->numberBetween($min = 1, $max = 10),
        'tempogasto'=> $faker->numberBetween($min = 1, $max = 10),
        'necessidade_id' => $faker->numberBetween($min = 1, $max = 10),
        'statustarefa_id' => $faker->numberBetween($min = 1, $max = 4),
        'tipostarefa_id' => $faker->numberBetween($min = 1, $max = 5),
        'user_id' => $faker->numberBetween($min = 1, $max = 5)
    ];
});

