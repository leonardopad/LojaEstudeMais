<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'valor',
        'quantidade'
    ];

    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class);
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }

}
