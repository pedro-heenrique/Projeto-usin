@extends('layouts.main')
@section('title', 'Criar Solicitação')
@section('content')

<body class="pagina-criacao-solicitacao">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Adicionar Automóvel</h2>
            </div>
            <div class="card-body">
                <form action="/ocurrences/cars" method="POST" enctype='multipart/form-data'>
                    @csrf 
                    <div class="form-group">
                        <label for="plate">Placa:</label>
                        <input type="text" class="form-control" id="plate" name="plate" placeholder="Digite a placa">
                    </div>
                    <div class="form-group">
                        <label for="brand">Marca:</label>
                        <input type="text" class="form-control" id="brand" name="brand" placeholder="Digite a marca">
                    </div>
                    <div class="form-group">
                        <label for="model">Modelo:</label>
                        <input type="text" class="form-control" id="model" name="model" placeholder="Digite o modelo">
                    </div>
                    <div class="form-group">
                        <label for="year">Ano:</label>
                        <input type="text" class="form-control" id="year" name="year" placeholder="Digite o Ano" maxlength="4">
                    </div>
                    <div class="form-group">
                        <label for="color">Cor:</label>
                        <input type="text" class="form-control" id="color" name="color" placeholder="Digite a cor">
                    </div>
                    <div class="d-flex flex-row">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="reset" class="btn btn-secondary">Limpar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
@endsection
