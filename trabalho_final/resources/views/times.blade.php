@extends('layouts.page')

@section('title', 'Times')

@section('content_header')
    <h1 class="m-0 text-dark">Times</h1>
@stop


@section('content')

<table class="table table-bordered table-striped">
  <thead class="thead-dark" style="text-align: center;">
    <tr>
      <th>Nome</th>
      <th>Estádio</th>
    </tr>
  </thead>
  <tbody>
    @foreach($times as $t)
      <tr>
        <td>{{$t->nome}}</td>
        <td>{{$t->estadio}}</td>
      </tr>
    @endforeach
  </tbody>
</table>

<a href="/criar" class="btn btn-success">Novo time</a>
@endsection