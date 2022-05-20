<?php
namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Options implements CastsAttributes
{

    /**
     * Transform the attribute from the underlying model values.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function get($model, string $key, $value, array $attributes)
    {
        // dd('get: '.$key);
        switch ($key) {
            case "price":
                return number_format($value / 100, 2, ',', ' ') . '€'; // le pone 2 decimales
                break;
            case "informations":
            case "address":
                return \json_decode($value) ;
                break;
        }
    }
    /**
     * Transform the attribute to its underlying model values.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, string $key, $value, array $attributes)
    {
        // dd('set: '.$key);
        switch ($key) {
            case "price":
                return $value * 100; // le pone 2 decimales
                break;
            case "informations":
            case "address":
                return \json_encode($value) ;
                break;
        }
    }
}
