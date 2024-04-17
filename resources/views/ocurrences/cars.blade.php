@extends('layouts.main')
@section('title', 'Veículos da Novacap')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div> 
                <a href="/ocurrences/createcars" class="btn btn-primary">Criar </a>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <h6>Veículos da Novacap</h6>
    <table>
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Cor</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
                <td>{{$car->plate}}</td>
                <td>{{$car->brand}}</td>
                <td>{{$car->model}}</td>
                <td>{{$car->year}}</td>
                <td>{{$car->color}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
