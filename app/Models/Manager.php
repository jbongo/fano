<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'contact_id',
        'isArchive',
    ];

    /**
     * Retourne le contact que possède un gérant
     */
    function contacts()
    {
        return $this->belongsTo(Contact::class);
    }

    /**
     * Retourne la liste des livraison associé à un gérant
     */
    function deliveries()
    {
        return $this->hasMany(Deliverie::class);
    }
}
