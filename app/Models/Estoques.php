<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estoques extends Model
{
    protected $table = '_estoques';
    protected $primaryKey = 'id_produto';
    public $incrementing = false;
    protected $fillable = ['quantidade'];

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_produto');
    }
}
