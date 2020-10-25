<?php

namespace Database\Factories;

use App\Models\Propriedade;
use App\Models\StatusPropriedade;
use App\Models\Uf;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropriedadeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Propriedade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $uf = Uf::pluck('id')->toArray();
        $status = StatusPropriedade::pluck('id')->toArray();

        return [
            'email_proprietario' => $this->faker->unique()->email,
            'complemento' => substr($this->faker->text(), 0, 60),
            'logradouro' => substr($this->faker->streetAddress, 0, 60),
            'numero' => $this->faker->numberBetween(0, 99999),
            'bairro' => substr($this->faker->country, 0, 30),
            'cidade' => substr($this->faker->city, 0, 60),
            'id_uf' => $this->faker->randomElement($uf),
            'id_status_propriedade' => $this->faker->randomElement($status),
        ];
    }
}
