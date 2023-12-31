<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'cpf',
        'email',
        'dataAdmicao',
        'cargo',
        'status'
    ];

    public function vendas()
    {
        return $this->hasMany(Venda::class);
    }

}
