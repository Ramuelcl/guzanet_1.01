<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Banca;
use App\Models\Compte;

class CompteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Compte::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'banca_id' => Banca::factory(),
            'numero' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'id_type' => $this->faker->randomDigitNotNull,
            'devise' => $this->faker->randomElements($array = array ('€','$','Lt'), $count = 1) // array('c'),
            'solde' => $this->faker->randomFloat(2, 0, 99999999.99),
            'date' => $this->faker->dateTime(),
        ];
    }
}
