<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Retourne le contact associé à une présence
     */
    function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
