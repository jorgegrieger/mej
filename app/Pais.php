<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
	protected $fillable = ['id', 'nome'];
	
        public function fornecedores()
    {
        return $this->hasMany(Fornecedor::class,'cidade_id','id');
    }
        public function clientes()
    {
        return $this->hasMany(Cliente::class,'cidade_id','id')-orderby('nome');
    }
}
