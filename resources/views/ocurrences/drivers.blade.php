@extends('layouts.main')
@section('title', 'Automoveis')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div> 
                <a href="/ocurrences/createdrivers" class="btn btn-primary">Criar </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h6>Motoristas da NOVACAP</h6>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
        @foreach($drivers as $driver)
            <tr>
                <td>{{$driver->code}}</td>
                <td>{{$driver->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>





























@endsection