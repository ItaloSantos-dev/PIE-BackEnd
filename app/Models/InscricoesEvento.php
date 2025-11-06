<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InscricoesEvento extends Model
{
    protected $table = '_inscricoes_evento';
    protected $primaryKey = 'id_inscricao';
    
    protected $fillable = [
        'id_cliente',
        'id_evento',
        'data_inscricao',
        'status_pagamento'
    ];

    protected $casts = [
        'data_inscricao' => 'datetime'
    ];

    // Relacionamento com Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    // Relacionamento com Evento
    public function evento()
    {
        return $this->belongsTo(Eventos::class, 'id_evento');
    }

    // Métodos auxiliares
    public function isPago()
    {
        return $this->status_pagamento === 'pago';
    }

    public function isPendente()
    {
        return $this->status_pagamento === 'pendente';
    }

    public function isCancelado()
    {
        return $this->status_pagamento === 'cancelado';
    }

    public function confirmarPagamento()
    {
        $this->status_pagamento = 'pago';
        $this->save();
    }

    public function cancelar()
    {
        $this->status_pagamento = 'cancelado';
        $this->save();
        
        // Incrementar vagas disponíveis no evento
        $this->evento->incrementarVagas();
    }
}
