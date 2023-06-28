<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'valor',
        'quantidade'
    ];

    public function venda()
    {
        return $this->belongsTo(Venda::class);
    }

}
