<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Compte;
use App\Models\Mouvement;
use App\Models\Tabla;

class MouvementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mouvement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'compte_id' => Compte::factory(),
            'date' => $this->faker->dateTime(),
            'libell' => $this->faker->word,
            'montant' => $this->faker->randomFloat(2, 0, 99999999.99),
            'id_tipo' => $this->faker->randomDigitNotNull,
            // 'tabla_id' => Tabla::factory(),
            'dateFiniched' => null,
            'id_error' => 0,
        ];
    }
}
