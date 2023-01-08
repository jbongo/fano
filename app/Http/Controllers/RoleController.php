<?php

namespace App\Http\Controllers;

use App\Models\PermisionRole;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\models\Role;
use App\models\PermissionRole;
use Illuminate\Support\Facades\Crypt;


class RoleController extends Controller
{
    /**
     * Retourne la liste des rôles
     */

    public function index(){

        $roles = Role::all();

        return view('role.index', ['roles' => $roles]);
    }


     /**
     * Retourne la liste des rôles
     */

    public function store(Request $request){


        $request->validate([
            'role' => 'string|required|unique:roles,name',
        ]);

        $roles = Role::all();
        Role::create([
            "name" => $request->role
        ]);

        return redirect()->route('role.index')->with('message', 'Nouveau rôle ajouté');
    }

     /**
     * Retourne la liste des rôles
     */

    public function update(Request $request, $roleId){


        $role = Role::where('id', $roleId)->first();

        if($role->name != $request->role){
            $request->validate([
                'role' => 'string|required|unique:roles,name',
            ]);
        }
        $role->name = $request->role;
        $role->update();

        return redirect()->route('role.index')->with('message', 'Rôle modifié');
    }

     /**
     * Retourne la liste des rôles
     */

    public function archive($roleId){

        $role = Role::where('id', $roleId)->first();
        $role->archive = true;
        $role->update();
        return $role->id;
        // return redirect()->route('role.index')->with('message', 'Rôle archivé');

    }

     /**
     * Retourne la liste des rôles
     */

    public function unarchive($roleId){

        $role = Role::where('id', $roleId)->first();
        $role->archive = false;
        $role->update();
        return $role->id;
        // return redirect()->route('role.index')->with('message', 'Rôle désarchivé');

    }

    /**
    * Retourne la liste des permissions du rôle
    */

    public function permissions($roleId){
        $role=Role::find(Crypt::decrypt($roleId));
        //dd($role);
        $permissions = $role->permissions;


        //$permissions=PermissionRole::all();
        dd($permissions);
        //$permissions = $role->permissions;

        //return view('role.permission', compact(['role', 'permissions']));
    }


    /**
     * Modifier les permissions du rôle
    */

    public function updatePermissions(Request $request, $roleId){

        $role = Role::where('id', Crypt::decrypt($roleId))->first();
        $permissions = $role->permissions;

        return view('role.permission', compact(['role', 'permissions']));

    }



}
