<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'type',
        'contact_id',
        'isArchive',
    ];

    /**
     * Retourne le contact que possède un client
     */
    function contacts()
    {
        return $this->belongsTo(Contact::class);
    }
    
    /**
     * Retourne la liste des livraison d'un client
     */
    function deliveries()
    {
        return $this->hasMany(Deliverie::class);
    }
}
