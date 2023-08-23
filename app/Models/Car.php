<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoAcessibilidade;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'modelo', 'dataAquisicao', 'placa', 'tipoAcessibilidade_id'
    ];

    public function tipoAcess(){
        return $this->belongsTo(TipoAcessibilidade::class, 'tipoAcessibilidade_id', 'id');
    }
}
