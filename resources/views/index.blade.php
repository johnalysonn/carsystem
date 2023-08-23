@extends('layout.layout')
@section('title', 'Home')
@section('content')
    <h1>Home</h1>

    @if($cars->count() > 0)
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Modelo</th>
                <th>dataAquisicao</th>
                <th>placa</th>
                <th>tipoAcess</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$car->modelo}}</td>
                <td>{{$car->dataAquisicao}}</td>
                <td>{{$car->placa}}</td>
                <td>{{$car->tipoAcess->tipo}}</td>
                <td>
                    <a href="{{route('car.edit', $car->id)}}">Edit</a>

                    <form action="{{route('car.destroy', $car->id)}}" name="destroy">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else

        <h3>No cars, <a href="{{route('car.create')}}">create now</a></h3>

    @endif
@endsection