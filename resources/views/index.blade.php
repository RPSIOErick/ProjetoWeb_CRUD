@extends('layouts.main')

@section('title', 'Página Inicial - Agendamento de Serviços')

@section('content')

    <form action="{{url('/store')}}" method="POST">
        @csrf

        <fieldset> <b id="FormTitle"> Cadastrar - Agendamento de Pontenciais Clientes </b> </fieldset>

        Sistema utilizado para agendamento de serviços.

        <br>
        <br>
                
        <div class="mb-3">
            <label for="InputName" class="form-label" id="InputTitle"> Nome: </label>
            <input name="nome" type="text" class="form-control" id="InputName" aria-describedby="nameHelp">
        </div>

        <div class="mb-3">
            <label for="InputTelefone" class="form-label" id="InputTitle"> Telefone: </label>
            <input name="telefone" type="text" class="form-control" id="InputTelefone" aria-describedby="telefoneHelp" placeholder="(XX) XXXXX-XXXX">
        </div>

        <label for="InputOrigem" class="form-label" id="InputTitle"> Origem: </label>
        <select name="origem" class="form-select">

            <option value="Celular">Celular</option>
            <option value="Telefone Pessoal">Telefone Pessoal</option>
            <option value="Telefone Comercial">Telefone Comercial</option>
            <option value="4" selected> (Clique para selecionar) </option>

        </select>

        <br>

        <div class="mb-3">
            <label for="InputData" class="form-label" id="InputTitle"> Data: </label>
            <input name="data" type="date" class="form-control" id="InputData" aria-describedby="dataHelp">
        </div>

        <label for="InputObs" class="form-label" id="InputTitle"> Observação: </label> <br>
            
        <textarea class="border" name="observacao" id="InputObs"></textarea>

        <br>
        <br>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>

@endsection