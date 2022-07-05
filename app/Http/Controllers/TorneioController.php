<?php

namespace App\Http\Controllers;

use App\Models\Torneio;
use Illuminate\Http\Request;

class TorneioController extends Controller
{
    public function torneio()
    {   
        $torneios = Torneio::orderBy('id', 'DESC')->get();

        return view('torneio', ['torneios' => $torneios]);
    }

    public function store(Request $request)
    {
        $aabb = new Torneio;

        $request->validate([
            'modalidade' => 'required|string|min:5|max:300',
        ]);

        $aabb->modalidade = $request->modalidade;
        $aabb->date = $request->date;
        $aabb->team = $request->team;
        

        $aabb->save();

        

        return redirect('/torneio');
        
     
    }

    public function destroy ($id) {
        Torneio::findorfail($id)->delete();
        return redirect('/torneio')->with('msg, Item excluído com sucesso');
     }
}
