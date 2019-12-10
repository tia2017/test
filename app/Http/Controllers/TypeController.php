<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;

use App\Type;

class TypeController extends Controller
{
    public function index()
    {
        if (!Session::get('login')) {
            return redirect('/')->with('alert', 'Anda Harus Login Terlebih Dahulu !');
        } elseif(Session::get('role') == 2) {
            $df_type = Type::query()->get(['*']);
    
            return view('types.index', compact('df_type'));
        } else{
            return redirect('dashboard');
        }
    }

    public function create()
    {
        $df_type = Type::get();

        return view('types.create', compact('df_type'));
    }

    public function store(Request $request){

        $this->validate($request,[
    		'name' => 'required',
            'description' => 'required'
        ]);

        Type::create([
    		'name' => $request->name,
            'description' => $request->description,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
    	]);

        return redirect('types');
    }

    public function edit($id)
    {

        $df_type = Type::find($id);

        return view('types.update', compact('df_type'));
    }

    public function update($id,Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required'
         ]);

         $Types = Type::find($id);
         $Types->name = $request->name;
         $Types->description = $request->description;
         $Types->save();
         return redirect('/types');
    }

    public function delete($id)
    {
        $Types = Type::find($id);
        $Types->delete();
        return redirect('/types');
    }




}
