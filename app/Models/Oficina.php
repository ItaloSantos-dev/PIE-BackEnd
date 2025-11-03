<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    protected $table = '_oficina';
    protected $primaryKey = 'id_oficina';
    protected $fillable = ['nome', 'descricao', 'data_inicio', 'data_fim', 'id_instrutor'];

    public function instrutor()
    {
        return $this->belongsTo(Instrutores::class, 'id_instrutor');
    }

    public function inscricoes()
    {
        return $this->hasMany(InscricoesOficina::class, 'id_oficina');
    }
}
