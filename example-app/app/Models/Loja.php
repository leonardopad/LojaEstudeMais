<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\LojaController;
use Illuminate\Http\Request;

class Loja extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'cpf',
        'dono',
        'endereco',
    ];

    public function vendedor()
    {
        return $this->hasMany(Vendedor::class);
    }
    
}



