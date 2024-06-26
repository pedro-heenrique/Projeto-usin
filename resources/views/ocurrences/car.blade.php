@extends('layouts.main')
@section('title', 'Veículos da Novacap')
@section('content')

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
            <tr>
                <td>ABC-1234</td>
                <td>Volvo</td>
                <td>FMX</td>
                <td>2017</td>
                <td>Verde</td>
            </tr>
            <tr>
                <td>DEF-5678</td>
                <td>Mercedes-Benz</td>
                <td>Actros</td>
                <td>2019</td>
                <td>Branco</td>
            </tr>
            <tr>
                <td>GHI-9012</td>
                <td>Scania</td>
                <td>R-Series</td>
                <td>2018</td>
                <td>Vermelho</td>
            </tr>
            <tr>
                <td>JKL-3456</td>
                <td>MAN</td>
                <td>TGX</td>
                <td>2016</td>
                <td>Azul</td>
            </tr>
            <tr>
                <td>MNO-7890</td>
                <td>Iveco</td>
                <td>Stralis</td>
                <td>2017</td>
                <td>Amarelo</td>
            </tr>
            <tr>
                <td>PQR-2345</td>
                <td>Mercedes-Benz</td>
                <td>Sprinter</td>
                <td>2020</td>
                <td>Prata</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
