@extends('layout.layout')
@section('title', 'Home')
@section('content')

<form action="{{route('car.store')}}" name="create" method="post">
@csrf

<div>
    <label>Modelo</label>
    <input type="text" name="modelo">
</div>
<div>
    <label>Data da aquisição</label>
    <input type="date" name="dataAquisicao">
</div>
<div>
    <label>Placa</label>
    <input type="text" name="placa">
</div>
<div>
    <label>Tipo de Acesso</label>
    <select name="tipoAcessibilidade_id">
        @foreach($tiposAcessibilidades as $tipoAcess)
        <option value="{{$tipoAcess->id}}">{{$tipoAcess->tipo}}</option>
        @endforeach
    </select>
</div>

<button type="submit">Create</button>

</form>

@endsection