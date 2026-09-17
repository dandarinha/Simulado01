<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'material',
        'valor',
        'data_val',
        'unid_medida',
        'aplicacao',
        'qtd_estoque',
        'qtd_minima'
    ];

    public function movimentacoes():HasMany
    {
        return $this->hasMany(Movimentacao::class);
    }
}