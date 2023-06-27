<?php

namespace App\Http\Controllers;

use App\Models\lojaModel;
use Illuminate\Http\Request;

class lojaController extends Controller
{
    public function index()
    {
        $loja = \app\Models\lojaModel::all();
        dd($loja);
    }
}
