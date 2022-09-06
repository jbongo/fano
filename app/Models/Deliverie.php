<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliverie extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Retourne le client associé à une livraison
     */
    function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Retourne le gérant associé à une livraison
     */
    function manager()
    {
        return $this->belongsTo(Manager::class);
    }

    /**
     * Retourne la zone associé à une livraison
     */
    function zone()
    {
        return $this->belongsTo(Zone::class);
    }
}
