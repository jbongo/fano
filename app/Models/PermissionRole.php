<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    use HasFactory;

    protected $guarded = [];

    /***
     * Indique la table liée à ce modèle
     */
    protected $table = 'role_permission';
}
