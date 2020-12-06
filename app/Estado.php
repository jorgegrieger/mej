<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['id', 'nome','sigla', 'pais_id'];


public function municipios()
  {
    return $this->hasMany('App\
    	Cidade');
  }

      public function fornecedores()
    {
        return $this->hasMany(Fornecedor::class,'cidade_id','id');
    }
        public function clientes()
    {
        return $this->hasMany(Cliente::class,'cidade_id','id');
    }
}