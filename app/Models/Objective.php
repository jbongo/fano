<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Retourne le contact associé à un objectif
     */
    function contact(){

        return $this->belongsTo(Contact::class);

      }
}
