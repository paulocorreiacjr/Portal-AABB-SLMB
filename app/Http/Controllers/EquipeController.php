<?php

namespace App\Http\Controllers;
use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function equipe() {

        $equipes = Equipe::orderBy('id', 'DESC')->get();

        return view('equipe', ['equipes' => $equipes]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aabb = new Equipe;

        $request->validate([
            'cidade' => 'required|string|min:5|max:300',
        ]);
        

        $aabb->team = $request->team;
        $aabb->modalidade = $request->modalidade;
        $aabb->cidade = $request->cidade;
        
        $aabb->save();

        return redirect('/equipe');

    }

    public function destroy ($id) {
        Equipe::findorfail($id)->delete();
        return redirect('/atletas')->with('msg, Item excluído com sucesso');
     }

}
