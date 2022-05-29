<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Telefono;

class TelefonoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Telefono::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fono=$this->faker->e164PhoneNumber;
        $fono=substr($fono, 1);
        if ($fono) {
            $telefonoPais =strlen($fono>10)?substr($fono, 0, strlen($fono)-10):0;
            $telefonoNumero =strlen($fono<=10)?$fono:substr($fono, -10);
        } else {
            $telefonoPais =0;
            $telefonoNumero=$this->faker->phoneNumber;
        }
        $telefono=[
            'telefonoPais'=>$telefonoPais,
            'telefonoNumero'=>$telefonoNumero,
            'num'=>'+'.$fono
        ];
        \json_encode($telefono);

        return [
            'tipo' => $this->faker->randomElement([1, 2, 3]),
            'numero' =>$telefono ,
        ];
    }
}
