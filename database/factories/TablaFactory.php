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
        $name=$this->faker->name;
        $slug=str_slug($name);
        return [
            'idTabla' => $this->faker->numberBetween(1, 10000),
            'code' => $this->faker->numberBetween(1, 10000),
            'name' => $name,
            'slug' => $slug,
            'valor' => null,
            'color_id' => Color::factory(),
            // 'color_id' => $this->faker->numberBetween(1, 141),
            'status' => $this->faker->randomElement(["activo","inactivo"]),
        ];
    }
}
