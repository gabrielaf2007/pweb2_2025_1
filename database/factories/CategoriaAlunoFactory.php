<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoriaAluno>
 */
class CategoriaAlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=> $this->faker->unique()->randomElement([
                'FUNDAMENTAL',
                'MEDIO',
                'GRADUACAO',
                'POS GRADUACAO'
            ]),
            'nivel'=> $this->faker->numberBetween(1,4)
        ];
    }
}
