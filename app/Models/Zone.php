<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Retourne la liste des livraison d'une zone
     */
    function deliveries()
    {
        return $this->hasMany(Deliverie::class);
    }
}
