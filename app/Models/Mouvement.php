<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouvement extends Model
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
        'compte_id' => 'integer',
        'date' => 'timestamp',
        'montant' => 'decimal:2',
        'id_tipo' => 'integer',
        'tabla_id' => 'integer',
        'dateFiniched' => 'timestamp',
        'id_error' => 'integer',
    ];

    public function compte()
    {
        return $this->belongsTo(Compte::class);
    }

    public function tabla()
    {
        return $this->belongsTo(Tabla::class);
    }
}
