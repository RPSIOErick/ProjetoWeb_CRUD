<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;

class ServicoController extends Controller
{
    //FUNÇÃO PARA CONSULTAR DADOS
    public function consulta()
    {
        $servicos = Servico::query()->get();

        return view('consulta', ['servicos' => $servicos]);
        
    }

    //FUNÇÃO PARA VER A INDEX (Tem o nome de 'CREATE' pois na Index já é possível cadastrar dados)
    public function create(){

        return view('index');

    }

    //FUNÇÃO PARA SALVAR DADOS NO BANCO
    public function store(Request $request)
    {

        Servico::query()->create($request->all());

        return back();

    }

    //FUNÇÃO PARA EXCLUIR DADOS NO BANCO
    public function destroy($id)
    {

        $servico = Servico::query()->findOrFail($id);

        $servico->delete();

        return back();

    }

    //FUNÇÃO QUE REDIRECIONA AO FORMULÁRIO DE EDIÇÃO
    public function edit($id)
    {

        $servico = Servico::query()->findOrFail($id);

        return view('editar', ['servico' => $servico]);

    }

    //FUNÇÃA PARA ATUALIZAR DADOS NO BANCO, RETORNA PARA A VIEW "consulta"
    public function update(Request $request, $id)
    {

        if(!$request->observacao){

            unset($request['observacao']);

        }

        $servico = Servico::query()->findOrFail($id);

        $servico->update($request->all());

        $servicos = Servico::query()->get();

        return view('consulta', ['servicos' => $servicos]);


    }
}
