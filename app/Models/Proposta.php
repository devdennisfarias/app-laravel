<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proposta extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'numero_nexus',
        'vendedor',
        'banco',
        'orgao',
        'tabela_digitada',
        'vigencia_tabela',
        'valor_bruto',
        'valor_liquido_liberado',
        'taxa_juros',
        'qtd_parcelas',
        'documentos',
    ];

    public function clientes(){
        return $this->belongsTo('Cliente', 'cliente_id');
    }
    
}
