<?php

namespace Database\Factories;

use App\Models\Loja;
use Illuminate\Database\Eloquent\Factories\Factory;

class LojaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Loja::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Defina os atributos da Loja aqui
            'nome' => $this->faker->company,
            'cnpj' => $this->faker->numerify('##.###.###/####-##'),
            'dono' => $this->faker->name,
            'endereco' => $this->faker->address,
        ];
    }
}
