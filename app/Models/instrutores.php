<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instrutores extends Model
{
    protected $table = 'instrutores';
    protected $primaryKey = 'id_instrutor';
    protected $fillable = ['nome', 'especialidade', 'email'];

    public function oficinas()
    {
        return $this->hasMany(Oficina::class, 'id_instrutor');
    }

    public function eventos()
    {
        return $this->hasMany(Eventos::class, 'id_instrutor');
    }
}
