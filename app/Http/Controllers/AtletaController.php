<?php

namespace App\Http\Controllers;

use App\Models\atleta;
use Illuminate\Http\Request;

class AtletaController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
        return view('home');
        
    }
    public function atletas()
    {   
        $atletas = Atleta::orderBy('id', 'DESC')->get();

        return view('atletas', ['atletas' => $atletas]);
    }

    public function store(Request $request)
    {
        $aabb = new atleta;

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        
        ]);



        $imageName = time().'.'.$request->image->extension();

        if (empty($imageName)) {
            return false;
        }

        $request->image->move(public_path('image/atletas'), $imageName);


        $aabb->name = $request->name;
        $aabb->date = $request->date;
        $aabb->team = $request->team;
        $aabb->image = $imageName;

        $aabb->save();

        // return view('atletas');

        return redirect('/atletas');
        
     
    }

    public function destroy ($id) {
       Atleta::findorfail($id)->delete();
       return redirect('/atletas')->with('msg, Item excluído com sucesso');
    }
}