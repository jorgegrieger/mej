<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['id', 'nome','estado_id'];


    public function estados()
    {
        return $this->hasMany('App\Estado');

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