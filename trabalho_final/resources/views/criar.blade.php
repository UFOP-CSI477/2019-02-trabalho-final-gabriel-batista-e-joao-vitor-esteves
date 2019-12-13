@extends('layouts.page')

@section('title', 'Inserir Time')

@section('content_header')
    <h1 class="m-0 text-dark">Novo Time</h1>
@stop

@section('content')
<form method="post" action="{!! action('TimeController@store') !!}">
    @csrf
    <div class="form-group">
        <label name="nome">Nome do Time:<span class="text-danger"></span></label>
        <input name="nome" type="text" id="nome" class="form-control" placeholder="Insira o nome do time" required>
    </div>

    <div class="form-group">
    <label name="estadio">Estádio:<span class="text-danger"></span></label>
    <input name="estadio" type="text" id="estadio" class="form-control" placeholder="Insira o estádio" required>
    </div>

    <div class="form-group">
    <button type="submit" name="submit" value="submit" id="submit" class="btn btn-success">Inserir</button>
    </div>
</form>
@endsection