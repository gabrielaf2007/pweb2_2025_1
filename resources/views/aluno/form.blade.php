@extends('base')
@section('titulo','Formulario aluno')
@section('conteudo')

    <h3>Formulário aluno</h3>

    <form action="{{route('aluno.store')}}" method="post">
        @csrf

        <label for="">Nome</label><br>
        <input type="text" name="nome"><br>

        <label for="">CPF</label><br>
        <input type="text" name="cpf"><br>

        <label for="">Telefone</label><br>
        <input type="text" name="telefone"><br>

        <button type="submit">Salvar</button>
    </form>

@stop
