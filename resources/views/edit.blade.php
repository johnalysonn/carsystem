@extends('layout.layout')
@section('title', 'Edit')
@section('content')

<form action="{{route('car.update', $car->id)}}" name="edit" method="post">
@csrf
@method('put')

<div>
    <label>Modelo</label>
    <input type="text" name="modelo" value="{{$car->modelo}}">
</div>
<div>
    <label>Data da aquisição</label>
    <input type="date" name="dataAquisicao" value="{{$car->dataAquisicao}}">
</div>
<div>
    <label>Placa</label>
    <input type="text" name="placa"  value="{{$car->placa}}">
</div>
<div>
    <label>Tipo de Acesso</label>
    <select name="tipoAcessibilidade_id">
        @foreach($tiposAcessibilidades as $tipoAcess)
        <option value="{{$tipoAcess->id}}" {{$car->tipoAcess->tipo == $tipoAcess->tipo? 'selected' : ''}}>{{$tipoAcess->tipo}}</option>
        @endforeach
    </select>
</div>

<button type="submit">Edit</button>

</form>

@endsection