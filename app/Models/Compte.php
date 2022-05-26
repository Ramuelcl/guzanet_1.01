<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'banca_id' => 'integer',
        'id_type' => 'integer',
        'solde' => 'decimal:2',
        'date' => 'timestamp',
    ];

    public function mouvements()
    {
        return $this->hasMany(Mouvement::class);
    }

    public function banca()
    {
        return $this->belongsTo(Banca::class);
    }
}
