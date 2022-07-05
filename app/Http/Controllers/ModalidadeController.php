<?php

namespace App\Http\Controllers;

use App\Models\Modalidade;
use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    public function modalidades_esportivas() {

        $modalidades = Modalidade::orderBy('id', 'DESC')->get();

        return view('modalidades_esportivas', ['modalidades' => $modalidades]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aabb = new Modalidade;

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);



        $imageName = time().'.'.$request->image->extension();

        if (empty($imageName)) {
            return false;
        }

        $request->image->move(public_path('image/modalidade'), $imageName);

        $aabb->modalidades = $request->modalidades;
        $aabb->image = $imageName;
        
        $aabb->save();

        return redirect('modalidades_esportivas');

    }

    public function destroy ($id) {
        Modalidade::findorfail($id)->delete();
        return redirect('/modalidades_esportivas')->with('msg, Item excluído com sucesso');
     }
}
