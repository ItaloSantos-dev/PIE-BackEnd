<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuariosSistema extends Model
{
    protected $table = '_usuarios_sistema';
    protected $primaryKey = 'id_usuario';
    protected $fillable = ['login', 'senha', 'nivel_acesso'];
}
