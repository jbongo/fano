<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'contact_id',
        'number_of_weekly_deliveries',
        'number_of_monthly_deliveries',
        'number_of_quarterly_deliveries',
    ];

    /**
     * Retourne le contact associé à un objectif
     */
    function contacts(){

        return $this->belongsTo(Contact::class);

      }
}
