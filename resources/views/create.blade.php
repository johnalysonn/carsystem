@extends('layout.layout')
@section('title', 'Home')
@section('content')

<form action="{{route('car.store')}}" name="create" method="post">
@csrf

<div>
    <label>Modelo</label>
    <input type="text" name="modelo" value="{{old('modelo')}}">
</div>
<div>
    <label>Data da aquisição</label>
    <input type="date" name="dataAquisicao" value="{{old('dataAquisicao')}}">
</div>
<div>
    <label>Placa</label>
    <input type="text" name="placa" value="{{old('placa')}}">
</div>
<div>
    <label>Tipo de Acesso</label>
    <select name="tipoAcessibilidade_id">
        @foreach($tiposAcessibilidades as $tipoAcess)
        <option value="{{$tipoAcess->id}}" {{old('tipoAcessibilidade_id') == $tipoAcess->id ? 'selected' : ''}}>{{$tipoAcess->tipo}}</option>
        @endforeach
    </select>
</div>

@if ($errors->all())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif
<button type="submit">Create</button>

</form>

@endsection
