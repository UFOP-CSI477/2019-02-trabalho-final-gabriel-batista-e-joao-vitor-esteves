@section ('itensMenu')

@stop


@extends('layouts.page')

@section('title', 'Jogos')

@section('content_header')
<h1 class="m-0 text-dark">Súmula do Jogo</h1>
@stop
@section('content')
@foreach($sumulas as $s)
<div>
    <div class="form-group">
        <label>Placar</label>
        <input type="text" name="placar" id="placar" value="{{$s->placar}}" class="form-control" disabled>
    </div>

    <div class="form-group">
        <label>Melhor Jogador:</label>
        <input type="text" name="melhor" id="melhor" value="{{$s->melhor}}" class="form-control" disabled>
    </div>

    <div class="form-group">
        <label>Faltas:</label>
        <input type="text" name="faltas" id="faltas" value="{{$s->faltas}}" class="form-control" disabled>
    </div>

    <div class="form-group">
        <label>Impedimentos:</label>
        <input type="text" name="impedimentos" id="impedimentos" value="{{$s->impedimentos}}" class="form-control" disabled>
    </div>

    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editar">Editar</button>
    <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalLongoExemplo">Editar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route('sumula.update',$s->id, $s->id) }}">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="placar">Placar:</label>
                            <input value="{{$s->placar}}" type="text" name="placar" id="placar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="melhor">Melhor Jogador:</label>
                            <input value="{{$s->melhor}}" type="text" name="melhor" id="melhor" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="faltas">Número de Faltas:</label>
                            <input value="{{$s->faltas}}" type="number" name="faltas" id="faltas" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="impedimentos">Número de Impedimentos:</label>
                            <input value="{{$s->impedimentos}}" type="number" name="impedimentos" id="impedimentos" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                        <button type="submit" class="btn btn-success">Salvar mudanças</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection