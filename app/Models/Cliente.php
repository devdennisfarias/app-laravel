<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;
    use HasFactory;



    protected $fillable = [
        'id',
        'nome',
        'cpf',
        'rg',
        'data_exp',
        'orgao_emissor',
        'data_nascimento',
        'alfabetizado',
        'figura_publica',
        'nome_pai',
        'nome_mae',
        'endereco',
        'numero',
        'complemento',
        'nacionalidade',
        'naturalidade',
        'estado_civil',
        'orgao_1',
        'matricula_1',
        'especie_beneficio_1',
        'salario_1',
        'banco_conta_1',
        'agencia_conta_1',
        'conta_bancaria_1',
        'orgao_2',
        'matricula_2',
        'especie_beneficio_2',
        'salario_2',
        'banco_conta_2',
        'agencia_conta_2',
        'conta_bancaria_2',
        'telefone_1',
        'telefone_2',
        'telefone_3',

    ];

    public function users(){
        return $this->hasMany('User', 'user_id');
    }

}
