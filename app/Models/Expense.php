<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $guarded = [];


    /**
     * Retourne le contact associé à une dépense
     */
    function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
