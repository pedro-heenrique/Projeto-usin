@extends('layouts.main')
@section('title', 'Cria Solicitação')
@section('content')

<body class="pagina-criacao-solicitacao">
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2>Adicionar Motorista</h2>
        </div>
        <div class="card-body">
            <form action="/ocurrences/drivers" method="POST" enctype='multipart/form-data'>
                @csrf 
                <div class="form-group">
                    <label for="code">Código:</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Digite o código">
                </div>
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o Nome">
                </div>
                <div class="d-flex flex-row">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-secondary">Limpar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
