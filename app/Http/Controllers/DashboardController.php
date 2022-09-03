<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    /**
     * Retourne la page de dashboard
     */

     public function index(){

        return view('dashboard.index');

     }
}
