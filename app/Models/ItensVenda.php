<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItensVenda extends Model
{
    protected $table = 'itens_venda';
    protected $primaryKey = 'id_item';
    protected $fillable = ['id_venda', 'id_produto', 'quantidade', 'preco_unitario'];

    public function venda()
    {
        return $this->belongsTo(Vendas::class, 'id_venda');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_produto');
    }
}
