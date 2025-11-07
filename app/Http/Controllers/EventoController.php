<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventos;
class EventoController extends Controller
{
    public function index()
    {

        $eventos = Eventos::where('status', '!=', 'cancelado')
                           ->where('data_inicio', '>=', now())
                           ->orderBy('data_inicio', 'asc')
                           ->get();
        return view('eventos', ['eventos' => $eventos]);
    }

    public function show($id){
        $evento = Eventos::with('instrutor')->find($id);
        return view('eventodetalhes', compact('evento'));
    }
}