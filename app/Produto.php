<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
 

    protected $fillable = ['nome', 'tipo','valor_venda','valor_compra',
                           'estoque','estoque_min','fornecedor_id'];

    public function fornecedores()
    {
        return $this->belongsTo(Fornecedor::class, 'fornecedor_id', 'id');
        return $this->belongsTo('App\Pessoa');
    }

    public function pedido()
    {
        return $this->belongsToMany(Pedido::class,'pedido_produto');
    }
}
