<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eventos;

class EventoController extends Controller
{
    public function create(){
        return view('formularioCriaEvento');
    }

    public function store(Request $request) {
        $evento = new eventos;
        
        $evento->nomeEvento = $request->nomeEvento;
        $evento->data = date('Y-m-d', strtotime(str_replace('/', '-', $request->data)));
        $evento->cidade = $request->cidade;
        $evento->privado = $request->privado;
        $evento->descricao = $request->descricao;
        $evento->save();

        return redirect('/')->with('msg','Evento criado');
    }

}
