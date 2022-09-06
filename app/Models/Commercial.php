<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commercial extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'contact_id',
        'isArchive',

    ];

    /**
     * Retourne le contact que possède un commercial
     */
    function contacts()
    {
        return $this->belongsTo(Contact::class);
    }
}
