<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Fornecedor extends Model
{

    use softdeletes;

    protected $fillable = ['nome', 'razao_social','data_nascimento','inscricao_municipal',
    'inscricao_estadual','telefone','email','celular','cnpj','cpf','rg','rua','bairro','numero',
    'cidade_id','estado_id','pais_id'];

    public function estados()
    {
        return $this->belongsTo(Estado::class,'estado_id','id');
    }

    public function cidades()
    {
        return $this->belongsTo(Cidade::class, 'cidade_id', 'id');
    }

    public function pais()
    {
    	return $this->belongsTo(Pais::class,'pais_id', 'id');
    }

    public function produtos()
    {
        return $this->belongsTo(Produto::class,'produto_id', 'id');
    }


}
