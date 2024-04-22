@extends('layouts.main')
@section('title', 'Materiais')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div> 
                <a href="/ocurrences/creatematerials" class="btn btn-primary">Criar </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h6>Materiais da NOVACAP</h6>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Descrição</th>
                <th>Quantidade Disponível</th>
                <th>Preço Unitário</th>
            </tr>
        </thead>
        <tbody>
        @foreach($materials as $material)
            <tr>
                <td>{{$material->code}}</td>
                <td>{{$material->description}}</td>
                <td>{{$material->quantity}}</td>
                <td>R$ {{$material->price}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection