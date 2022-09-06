<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'type',
        'motif',
        'date',
        'contact_id',
    ];

    /**
     * Retourne le contact associé à une dépense
     */
    function contacts()
    {
        return $this->belongsTo(Contact::class);
    }
}
