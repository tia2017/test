<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Role;

class RoleController extends Controller
{
    public function index()
    {
        $df_role = Roles::query()->get(['*']);

        return view('roles.index', compact('df_role'));
    }

    public function create()
    {
        $df_role = Roles::get();

        return view('roles.create', compact('df_role'));
    }

    public function store(Request $request){
        
        $this->validate($request,[
    		'name' => 'required',
        ]);

        Roles::create([
    		'name' => $request->name,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
    	]);
        
        return redirect('roles');
    }

    public function edit($id)
    {

        $df_role = Roles::find($id);

        return view('roles.update', compact('df_role')); 
    }

    public function update($id,Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
         ]);

         $roles = Roles::find($id);
         $roles->name = $request->name;
         $roles->save();
         return redirect('/roles');
    }

    public function delete($id)
    {
        $roles = Roles::find($id);
        $roles->delete();
        return redirect('/roles');
    }




}
