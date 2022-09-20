<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Role;

class RoleController extends Controller
{
    /**
     * Retourne la liste des rôles
     */

    public function index(){

        return view('role.index');
    }


     /**
     * Retourne la liste des rôles
     */

    public function store(Request $request){

        $request->validate([
            'name' => 'string|required|unique:roles',
        ]);

        Role::create([
            "name" => $request->name
        ]);

        return redirect()->route('role.index')->with('ok', 'Nouveau rôle ajouté');
    }

     /**
     * Retourne la liste des rôles
     */

    public function update(Request $request, $roleId){


        $role = Role::where('id', $roleId)->first();
        
        if($role->name != $request->name){
            $request->validate([
                'role' => 'string|required|unique:roles',
            ]);
        }
        $role->name = $request->name;
        $role->update();
      
        return redirect()->route('role.index')->with('ok', 'Rôle modifié');
    }

     /**
     * Retourne la liste des rôles
     */

    public function archive($roleId){

        $role = Role::where('id', $roleId)->first();
        $role->archive = true;
        $role->update();
        return redirect()->route('role.index')->with('ok', 'Rôle archivé');

    }

     /**
     * Retourne la liste des rôles
     */

    public function unarchive($roleId){

        $role = Role::where('id', $roleId)->first();
        $role->archive = false;
        $role->update();
        return redirect()->route('role.index')->with('ok', 'Rôle désarchivé');

    }
}
