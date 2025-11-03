<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriasPrimas extends Model
{
    protected $table = 'materias_primas';
    protected $primaryKey = 'id_materia';
    protected $fillable = ['nome', 'descricao'];

    public function fornecedores()
    {
        return $this->belongsToMany(Fornecedores::class, 'compras_materia_prima', 'id_materia', 'id_fornecedor');
    }
}
