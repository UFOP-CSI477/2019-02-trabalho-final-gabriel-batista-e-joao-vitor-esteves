@extends('layouts.page')

@section('title', 'Jogos')

@section('content_header')
    <h1 class="m-0 text-dark">Jogos</h1>
@stop

@section('content')
<table class="table table-bordered table-striped">
  <thead class="thead-dark" style="text-align: center;">
    <tr>
      <th>Casa</th>
      <th>Fora</th>
      <th>Estádio</th>
      <th>Data</th>
      <th colspan="2">Súmula</th>
    </tr>
  </thead>
  <tbody>
    @foreach($eventos as $e)
      <tr>
        <td>{{$e->time1}}</td>
        <td>{{$e->time2}}</td>
        <td>{{$e->estadio}}</td>
        <td>{{$e->data}}</td>
        <td>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPreenche{{$e->id}}">Preencher</button>
          <div class="modal fade" id="modalPreenche{{$e->id}}" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <form method="post" action="{!! action('SumulaController@store',['id'=> $e->id]) !!}">
                      {{csrf_field()}}

                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="TituloModalLongoExemplo">Preencher Dados</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div> 
                            <div class="modal-body">
                              <div class="form-group">
                                  <label for="placar">Placar:</label>
                                  <input type="text" name="placar" id="placar" placeholder="Exemplo: 2x0" class="form-control">
                              </div>

                              <div class="form-group">
                                  <label for="melhor">Melhor Jogador:</label>
                                  <input type="text" name="melhor" id="melhor" placeholder="Insira o melhor jogador da partida" class="form-control">
                              </div>

                              <div class="form-group">
                                  <label for="faltas">Número de Faltas:</label>
                                  <input type="number" name="faltas" id="faltas" placeholder="Insira o número de faltas" class="form-control">
                              </div>

                              <div class="form-group">
                                  <label for="impedimentos">Número de Impedimentos:</label>
                                  <input type="number" name="impedimentos" id="impedimentos" placeholder="Insira o número de impedimentos" class="form-control">
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                              <button type="submit" class="btn btn-success">Confirmar</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div> 
      </td>
      <td>
        <a href="{{ route('sumula.show',$e->id) }}" class="btn btn-dark">Visualizar</a>
      </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection