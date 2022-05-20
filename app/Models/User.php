<?php

namespace App\Models;

use App\Casts\options;

use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;
// Spatie
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'price'=>options::class,
        'is_active'=>'boolean', // ejemplo cuando el campo es 0 ó 1 dará valores booleanos false, true.
        'informations'=>options::class,
        'address'=>options::class,
    ];
    // TRANSFORMATEURS
    /**
     * Get the user's name.
     *
     * @return user uppercase
     */
    public function getNameAttribute($value)
    {
        return Str::title($value);
    }    /**
     * Get the user's name.
     *
     * @return value format numeric
     */
    // public function getPriceAttribute($value)
    // {
    //     return number_format($value / 100, 2, ',', ' ') . ' €'; // le pone 2 decimales
    // }
    // public function setPriceAttribute($value)
    // {
    //     $this->attribute['price']= $value*100;// le quita los decimales
    // }
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
