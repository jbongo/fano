<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'contact_id',
        'date',

    ];

    /**
     * Retourne le contact associé à une présence
     */
    function contacts()
    {
        return $this->belongsTo(Contact::class);
    }
}
