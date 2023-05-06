@extends('layouts.main')

@section('title', 'Consulta de Agendamentos')

@section('content')

            <fieldset> <b id="FormTitle"> Consultar Contatos Agendados </b> </fieldset>
            <br>
                       
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Origem</th>
                <th scope="col">Data</th>
                <th scope="col">Observação</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($servicos as $Servico)
                <tr>                    
            
                    <td>{{$Servico->nome}}</td>
                    <td>{{$Servico->telefone}}</td>
                    <td>{{$Servico->origem}}</td>
                    <td>{{$Servico->data->format('d/m/Y')}}</td>
                    <td>{{$Servico->observacao}}</td>
                    <td id="DBActions">
                        <a href="{{url("/editar/$Servico->id")}}"> Editar </a> <br>
                        <a href="{{url('/{$Servico->id}')}}" onclick="event.preventDefault(); document.getElementById('form-delete-{{$Servico->id}}').submit()"> Excluir </a>
                        <form action="{{url("/excluir/{$Servico->id}")}}" method="POST" style="display: none;" id="form-delete-{{$Servico->id}}">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>

            <div id="TableWarning">

                Deslize para a esquerda ver as informações...

            </div>

        
@endsection