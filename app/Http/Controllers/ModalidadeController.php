<?php

namespace App\Http\Controllers;
use App\Models\Modalidade;
use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    public function modalidades()
    {   
        $modalidades = Modalidade::orderBy('id', 'DESC')->get();

        return view('modalidades', ['modal' => $modalidades]);
    }

    public function store(Request $request)
    {
        $modalidades = new Modalidade;

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        
        ]);

        $imageName = time().'.'.$request->image->extension();

        if (empty($imageName)) {
            return false;
        }

        $request->image->move(public_path('image/modalidades'), $imageName);


        $modalidades->modalidades = $request->modalidades;
        $modalidades->image = $imageName;

        $modalidades->save();


        return redirect('/modalidades');
        
     
    }
}
