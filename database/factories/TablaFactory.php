<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Color;
use App\Models\Tabla;

class TablaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tabla::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_tabla' => $this->faker->numberBetween(-100000, 100000),
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'color' => Color::factory(),
            'status' => $this->faker->randomElement(["activo","inactivo"]),
        ];
    }
}
