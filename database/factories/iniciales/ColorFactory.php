<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Color;

class ColorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Color::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $hexa = $this->faker->hexcolor();

        return [
            'name' => $this->faker->ColorName($hexa),
            'hexa' => $hexa,
            'rgb' => rgbCssColor,
            'metadata' => null,
        ];
    }
}
