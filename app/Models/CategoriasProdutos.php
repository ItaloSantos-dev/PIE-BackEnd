<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriasProdutos extends Model
{
    protected $table = 'categorias_produtos';
    protected $primaryKey = 'id_categoria';
    protected $fillable = ['nome_categoria'];

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'id_categoria');
    }
}
