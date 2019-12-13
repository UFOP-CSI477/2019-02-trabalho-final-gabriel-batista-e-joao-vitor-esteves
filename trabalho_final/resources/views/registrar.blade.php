@extends('layouts.page')

@section('title', 'Registrar Jogo')

@section('content_header')
    <h1 class="m-0 text-dark">Registro de Jogos</h1>
@stop

@section ('itensMenu')

@stop


@section('content')

<form method="post" action="{!! action ('EventoController@store') !!}">
  @csrf
  <div class="form-group">
        <label for="casa">Time Casa:</label>
      
        <select required name="time1" id="time1" class="custom-select">
          <option disabled selected value="">Selecione</option>
          @foreach($times as $t)
            <option value="{{$t->id}}">{{$t->nome}}</option>
          @endforeach

        </select>
      </div>

      <div>
        <label for="fora">Time Fora:</label>

        <select required id="time2" name="time2" class="custom-select">
          <option disabled selected value="">Selecione</option>
          @foreach($times2 as $t)
            <option value="{{$t->id}}">{{$t->nome}}</option>
          @endforeach
        </select>
      </div>

      <br>

      <div class="form-group">
          <label>Estádio:</label>
          <input type="text" id="estadio" name="estadio" class="form-control" placeholder="Insira o estádio" required>
      </div>

      <div class="form-group">
          <label>Data:</label>
          <input type="date" id="Data" name="data" class="form-control" required>
      </div>

      <button type="submit" name="submit" value="submit" id="submit" class="btn btn-success">Inserir</button>
</form>
@endsection