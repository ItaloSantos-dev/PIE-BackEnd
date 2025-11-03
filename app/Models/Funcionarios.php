<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $table = '_funcionarios';
    protected $primaryKey = 'id_funcionario';
    protected $fillable = ['nome', 'cargo', 'email'];
}
