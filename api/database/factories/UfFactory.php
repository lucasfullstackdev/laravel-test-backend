<?php

namespace Database\Factories;

use App\Models\Uf;
use Illuminate\Database\Eloquent\Factories\Factory;

class UfFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Uf::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => substr($this->faker->unique()->name, 0, 19),
            'sigla' => substr($this->faker->unique()->text(), 0, 2)
        ];
    }
}
