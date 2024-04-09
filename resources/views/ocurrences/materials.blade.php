@extends('layouts.main')
@section('title', 'Materiais')
@section('content')


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
            <tr>
                <td>001</td>
                <td>Cimento Portland</td>
                <td>500 sacos</td>
                <td>R$ 25,00</td>
            </tr>
            <tr>
                <td>002</td>
                <td>Areia</td>
                <td>50 m³</td>
                <td>R$ 45,00</td>
            </tr>
            <tr>
                <td>003</td>
                <td>Brita</td>
                <td>50 m³</td>
                <td>R$ 50,00</td>
            </tr>
            <tr>
                <td>004</td>
                <td>Cascalho</td>
                <td>50 m³</td>
                <td>R$ 60,00</td>
            </tr>
            <tr>
                <td>005</td>
                <td>Terra</td>
                <td>50 m³</td>
                <td>R$ 70,00</td>
            </tr>
            
        </tbody>
    </table>
</div>































@endsection