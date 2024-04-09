@extends('layouts.main')
@section('title', 'Cria Solicitação')
@section('content')

<body class="pagina-criacao-solicitacao">
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2>Criar Solicitação</h2>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="tipo_solicitante">Tipo de solicitante:</label>
                    <select class="form-control" id="tipo_solicitante">
                        <option value="">Selecione o Tipo</option>
                        <option value="orgao">Orgão Público</option>
                        <option value="interno">Interno</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="setor">Setor:</label>
                    <select class="form-control" id="setor">
                        <option value="">Selecione o Setor</option>
                        <option value="deinf">DEINF</option>
                        <option value="degep">DEGEP</option>
                        <option value="subgov">SUBGOV</option>
                        <option value="coplan">COPLAN</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="material">Material:</label>
                    <select class="form-control" id="material">
                        <option value="">Selecione o Material</option>
                        <option value="terra">Terra</option>
                        <option value="areia">Areia</option>
                        <option value="brita">Brita</option>
                        <option value="cascalho">Cascalho</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="motorista">Motorista:</label>
                    <input type="text" class="form-control" id="motorista" placeholder="Digite o nome do motorista">
                </div>
                <div class="form-group">
                    <label for="automovel">Automóvel:</label>
                    <input type="text" class="form-control" id="automovel" placeholder="Digite o nome do Automóvel">
                </div>
                <div class="form-group">
                    <label for="endereco_origem">Endereço de origem:</label>
                    <input type="text" class="form-control" id="endereco_origem" placeholder="Digite o endereço de origem">
                </div>
                <div class="form-group">
                    <label for="endereco_entrega">Endereço de entrega:</label>
                    <input type="text" class="form-control" id="endereco_entrega" placeholder="Digite o endereço de entrega">
                </div>
                <div class="d-flex justify-content-between">
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
</body>
@endsection
