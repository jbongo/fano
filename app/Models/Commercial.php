<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commercial extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Retourne le contact que possède un commercial
     */
    function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
