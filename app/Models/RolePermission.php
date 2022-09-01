<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    /***
     * Indique la tab le liée à ce modèle
     */
    protected $table = 'role_permission';
}
