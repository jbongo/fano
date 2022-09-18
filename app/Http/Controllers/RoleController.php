<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Retourne la liste des rôles
     */

    public function index(){

        return view('role.index');
    }
}
