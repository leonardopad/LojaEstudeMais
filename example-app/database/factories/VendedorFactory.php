<?php

namespace Database\Factories;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vendedor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendedor>
 * 'id',
        'nome',
        'cpf',
        'email',
        'dataAdmicao',
        'cargo',
        'status'
 */
class VendedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->company,
            'cpf' => $this->faker->numerify('##.###.###/####-##'),
            'email' => $this->faker->name,
            'cargo' => $this->faker->name,
            'status' => StatusEnum::toArray()[array_rand(StatusEnum::toArray())],
        ];
    }
}
