<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InscricoesOficina extends Model
{
    protected $table = '_inscricoes_oficina';
    protected $primaryKey = 'id_inscricao';
    protected $fillable = ['id_cliente', 'id_oficina', 'data_inscricao'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function oficina()
    {
        return $this->belongsTo(Oficina::class, 'id_oficina');
    }
}
