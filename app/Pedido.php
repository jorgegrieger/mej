<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    
    public function clientes()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
        return $this->belongsTo('App\Pessoa');
    }

    public function produtos()
    {
        return $this->belongsToMany(Produto::class,'pedido_produto');
    }

}


