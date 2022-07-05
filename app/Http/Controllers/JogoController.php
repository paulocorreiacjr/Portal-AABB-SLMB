<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogoController extends Controller
{
    public function jogos() {

        $jogos = Jogo::orderBy('id', 'DESC')->get();

        return view('jogos', ['jogos' => $jogos]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aabb = new Jogo;

       

        $aabb->torneio = $request->torneio;
        $aabb->partida = $request->partida;
        $aabb->local = $request->local;
        $aabb->data = $request->data;
        $aabb->horario = $request->horario;
        $aabb->gols = $request->gols;
        $aabb->cartaoamarelo = $request->cartaoamarelho;
        $aabb->cartaovermelho = $request->cartaovermelho;
        
        
        
        $aabb->save();

        return redirect('/jogos');

    }

    public function destroy ($id) {
        Jogo::findorfail($id)->delete();
        return redirect('/jogos')->with('msg, Item excluído com sucesso');
     }
}
