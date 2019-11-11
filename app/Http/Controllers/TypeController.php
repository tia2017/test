<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Type;

class TypeController extends Controller
{
    public function index()
    {
        $df_type = Types::query()->get(['*']);

        return view('types.index', compact('df_type'));
    }

    public function create()
    {
        $df_type = Types::get();

        return view('types.create', compact('df_type'));
    }

    public function store(Request $request){
        
        $this->validate($request,[
    		'name' => 'required',
        ]);

        Types::create([
    		'name' => $request->name,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
    	]);
        
        return redirect('types');
    }

    public function edit($id)
    {

        $df_type = Types::find($id);

        return view('types.update', compact('df_type')); 
    }

    public function update($id,Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
         ]);

         $Types = Types::find($id);
         $Types->name = $request->name;
         $Types->save();
         return redirect('/types');
    }

    public function delete($id)
    {
        $Types = Types::find($id);
        $Types->delete();
        return redirect('/types');
    }




}
