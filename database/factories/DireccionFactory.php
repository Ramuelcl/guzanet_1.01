<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Direccion;

class DireccionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Direccion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // create a French faker
        // $this->faker = Factory::create('fr_FR');
        // calleNumero - calleTipo(rue-bis) - calleNombre - calleCP - calleCiudad - calleEstado - callePais
        $calleNumero =$this->faker->buildingNumber();
        $calleTipo =$this->faker->streetSuffix();
        $calleNombre =$this->faker->streetName();
        $calleCP =$this->faker->postcode();
        $calleCiudad =$this->faker->city();
        $calleEstado =$this->faker->state();
        $callePais =$this->faker->country();
        $direccion=[
            'calleNumero'=>$calleNumero,
            'calleTipo'=>$calleTipo,
            'calleNombre'=>$calleNombre,
            'calleCP'=>$calleCP,
            'calleCiudad'=>$calleCiudad,
            'calleEstado'=>$calleEstado,
            'callePais'=>$callePais,
        ];
        \json_encode($direccion);
        // \dd($direccion);
        return [
            'tipo' => $this->faker->randomElement([1, 2, 3, 4, 5]),
            'direccion'=>$direccion
        ];
    }
}
