@section ('itensMenu')

@stop


@section('content')

<form method="post">
  @csrf
  @foreach($sumulas as $s)
    <div class="form-group">
      <label>Placar</label>
      <input type="text" name="placar" id="placar" value="{{$s->placar}}">
    </div>

    <div class="form-group">
      <label>Melhor Jogador:</label>
      <input type="text" name="melhor" id="melhor" value="{{$s->melhor}}">
    </div>

    <div class="form-group">
      <label>Faltas:</label>
      <input type="text" name="faltas" id="faltas" value="{{$s->faltas}}">
    </div>

    <div class="form-group">
      <label>Impedimentos:</label>
      <input type="text" name="impedimentos" id="impedimentos" value="{{$s->impedimentos}}">
    </div>
  @endforeach   

</form>
@endsection