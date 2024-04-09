@extends('layouts.main')
@section('title', 'Solicitantes')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div> 
                <a href="/ocurrences/createapplicants" class="btn btn-primary">Criar </a>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th class='th-status status-right-align'>Setor</th>
                        <th class='th-action acompanhamento-right-align'>   </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>II - DE</td>
                        <td class='status-right-align'>DICOR</td>
                        <td class='acompanhamento-right-align'><ion-icon name="eye-outline"></ion-icon></td>
                    </tr>
                    <tr>
                        <td>III - DU</td>
                        <td class='status-right-align '>DEINFRA</td>
                        <td class='acompanhamento-right-align'><ion-icon name="eye-outline"></ion-icon></td>
                    </tr>
                    <tr>
                        <td>III - DU</td>
                        <td class=' status-right-align'>DIPROJ</td>
                        <td class='acompanhamento-right-align'><ion-icon name="eye-outline"></ion-icon></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


















@endsection