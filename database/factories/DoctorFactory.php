<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Doctor::class, function (Faker $faker) {
    return [
        'email' => $faker->text(100),
        'senha' => $faker->text(30),
        'nome' => $faker->text(100),
        'dataDeNascimento' => $faker->date(),
        'rg' => $faker->char(10),
        'cpf' => $faker->char(11),
        'telefone' => $faker->char(11),
        'endereco' => $faker->text(20),
        'cep' => $faker->char(8),
        'especialidade' => $faker->text(100),
        'localizacoes' => $faker->text(200),
        'convenios' => $faker->text(200),
    ];
});