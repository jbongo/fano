<?php

namespace App\Models;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone1',
        'phone2',
        'adresse',
        'isArchive',

    ];

    /**
     * Retourne le livreur associé au contact
     */
    function deliverers()
    {
        return $this->hasOne(Deliverer::class);
    }

    /**
     * Retourne le gerant associé au contact
     */
    function managers()
    {
        return $this->hasOne(Manager::class);
    }

    /**
     * Retourne le commercial associé au contact
     */
    function commercials()
    {
        return $this->hasOne(Commercial::class);
    }

    /**
     * Retourne le client associé au contact
     */
    function customers()
    {
        return $this->hasOne(Customer::class);
    }

    /**
     * Retourne la liste des dépenses éffectuée par un contact
     */
    function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    /**
     * Retourne la liste de présence d'un contact
     */
    function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
    
    /**
     * Retourne la l'objectif associé à un contact
     */
    function objectives()
    {
        return $this->hasOne(Objective::class);
    }
}
