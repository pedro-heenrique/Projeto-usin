@extends('layouts.main')
@section('title', 'Sistema')
@section('content')

<title>@yield('title')</title>

<!-- Fonte do Google -->
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

<!-- CSS Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- CSS DA APLICAÇÃO -->
<link rel="stylesheet" href="/css/styles.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div> 
                <a href="/ocurrences/create" class="btn btn-primary">Criar </a>
                
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <br>
            <h2>Acompanhamento:</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class='th-status status-right-align'>Status</th>
                        <th class='th-action acompanhamento-right-align'>   </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>14124</td>
                        <td class='th-enviado status-right-align'>Enviado</td>
                        <td class='acompanhamento-right-align'><ion-icon name="eye-outline"></ion-icon></td>
                    </tr>
                    <tr>
                        <td>21231</td>
                        <td class='th-enviado status-right-align '>Enviado</td>
                        <td class='acompanhamento-right-align'><ion-icon name="eye-outline"></ion-icon></td>
                    </tr>
                    <tr>
                        <td>45677</td>
                        <td class='th-processando status-right-align'>Processando</td>
                        <td class='acompanhamento-right-align'><ion-icon name="eye-outline"></ion-icon></td>
                    </tr>
                    <tr>
                        <td>31315</td>
                        <td class='th-processando status-right-align'>Processando</td>
                        <td class='acompanhamento-right-align'><ion-icon name="eye-outline"></ion-icon></td>
                    </tr>
                    <tr>
                        <td>33123</td>
                        <td class='th-emespera status-right-align'>Em Espera</td>
                        <td class='acompanhamento-right-align'><ion-icon name="eye-outline"></ion-icon></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
