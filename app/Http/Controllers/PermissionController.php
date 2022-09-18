<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
     /**
     * Retourne la liste des perrmissions
     */

    public function index(){

        return view('permission.index');
    }
}
