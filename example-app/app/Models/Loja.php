<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\lojaController;
use Illuminate\Http\Request;

class Loja extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'dono',
        'endereco',
    ];

    
}



