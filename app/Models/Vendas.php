<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $table = '_vendas';
    protected $primaryKey = 'id_venda';
    protected $fillable = ['id_cliente', 'data_venda', 'valor_total'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function itensVenda()
    {
        return $this->hasMany(ItensVenda::class, 'id_venda');
    }
}
