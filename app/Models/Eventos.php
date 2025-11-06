<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table = '_eventos';
    protected $primaryKey = 'id_evento';
    
    protected $fillable = [
        'nome',
        'descricao',
        'tipo_evento',
        'data_inicio',
        'data_fim',
        'local',
        'capacidade_maxima',
        'vagas_disponiveis',
        'valor_inscricao',
        'status',
        'id_instrutor',
        'imagem'
    ];

    protected $casts = [
        'data_inicio' => 'datetime',
        'data_fim' => 'datetime',
        'valor_inscricao' => 'decimal:2',
        'capacidade_maxima' => 'integer',
        'vagas_disponiveis' => 'integer'
    ];

    // Relacionamento com Instrutor (opcional)
    public function instrutor()
    {
        return $this->belongsTo(Instrutores::class, 'id_instrutor');
    }

    // Relacionamento com Inscrições (muitos clientes podem se inscrever)
    public function inscricoes()
    {
        return $this->hasMany(InscricoesEvento::class, 'id_evento');
    }

    // Relacionamento com Clientes através de inscrições
    public function participantes()
    {
        return $this->belongsToMany(Cliente::class, '_inscricoes_evento', 'id_evento', 'id_cliente')
                    ->withPivot('data_inscricao', 'status_pagamento')
                    ->withTimestamps();
    }

    // Métodos auxiliares
    public function isLotado()
    {
        return $this->vagas_disponiveis <= 0;
    }

    public function isGratuito()
    {
        return $this->valor_inscricao == 0;
    }

    public function isAtivo()
    {
        return in_array($this->status, ['planejado', 'confirmado', 'em_andamento']);
    }

    public function decrementarVagas()
    {
        if ($this->vagas_disponiveis > 0) {
            $this->decrement('vagas_disponiveis');
        }
    }

    public function incrementarVagas()
    {
        if ($this->vagas_disponiveis < $this->capacidade_maxima) {
            $this->increment('vagas_disponiveis');
        }
    }
}
