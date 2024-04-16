<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    use HasFactory;
    
    protected $table = 'solicitacoes';

    protected $fillable = [
        'tipo_solicitante',
        'setor',
        'material',
        'motorista',
        'automovel',
        'endereco_origem',
        'endereco_entrega',
    ];
}