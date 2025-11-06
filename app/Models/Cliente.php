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

    public function inscricoesOficina()
    {
        return $this->hasMany(InscricoesOficina::class, 'id_cliente');
    }

    public function inscricoesEvento()
    {
        return $this->hasMany(InscricoesEvento::class, 'id_cliente');
    }

    public function eventos()
    {
        return $this->belongsToMany(Eventos::class, '_inscricoes_evento', 'id_cliente', 'id_evento')
                    ->withPivot('data_inscricao', 'status_pagamento')
                    ->withTimestamps();
    }
}
