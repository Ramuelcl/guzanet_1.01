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
        return [
            'name' => $this->faker->name,
            'hexa' => $this->faker->regexify('[A-Za-z0-9]{6}'),
            'rgb' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'metadata' => $this->faker->word,
        ];
    }
}