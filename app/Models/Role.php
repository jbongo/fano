<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];



    /**
     * Retourne la liste des permissions d'un rôles
     */
    function permissions(){

      return $this->belongsToMany(Permission::class);

    }
}
