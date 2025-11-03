<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = '_cliente';
    protected $primaryKey = 'id_cliente';
    protected $fillable = ['nome', 'email', 'telefone', 'endereco'];

    public function vendas()
    {
        return $this->hasMany(Vendas::class, 'id_cliente');
    }
}
