<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pessoa>
 */
class PessoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'nome_social' => fake()->name(),
            'cpf' => fake()->numerify('###########'),
            'nome_mae' => fake()->name(),
            'nome_pai' => fake()->name(),
            'telefone' => fake()->numerify('###########'),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
