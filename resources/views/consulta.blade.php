@extends('layouts.main')

@section('title', 'Consulta de Agendamentos')

@section('content')

            <fieldset> <b id="FormTitle"> Consultar Contatos Agendados </b> </fieldset>
            <br>

            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Origem</th>
                <th scope="col">Data</th>
                <th scope="col">Observação</th>
                </tr>
            </thead>
            <tbody>
            @foreach($servicos as $Servico)
                <tr>                    
                    <th scope="row">{{$Servico->id}}</th>
                    <td>{{$Servico->nome}}</td>
                    <td>{{$Servico->telefone}}</td>
                    <td>{{$Servico->origem}}</td>
                    <td>{{$Servico->data->format('d/m/Y')}}</td>
                    <td>{{$Servico->observacao}}</td>
                </tr>
            @endforeach
            </tbody>
            </table>
        
@endsection