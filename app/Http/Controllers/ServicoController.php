<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;

class ServicoController extends Controller
{
    public function consulta()
    {
        $servicos = Servico::query()->get();

        return view('consulta', ['servicos' => $servicos]);
        
    }

    public function create(){

        return view('index');

    }

    public function store(Request $request)
    {

        Servico::query()->create($request->all());

        return back();

    }
}
