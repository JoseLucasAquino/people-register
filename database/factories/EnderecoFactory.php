<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Endereco>
 */
class EnderecoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo' => fake()->randomElement(['Residencial', 'Comercial']),
            'CEP' => fake()->numerify('########'),
            'logradouro' => fake()->name(),
            'numero' => fake()->bothify('##?'),
            'complemento' => fake()->word(),
            'bairro' => fake()->name(),
            'cidade' => fake()->city(),
            'estado' => fake()->state(),
            'atual' => false
        ];
    }
}
