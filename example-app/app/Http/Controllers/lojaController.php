<?php

namespace App\Http\Controllers;

use App\Models\lojaModel;
use Illuminate\Http\Request;
use app\models\Loja;

class lojaController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string',
            'cpf' => 'required|string',
            'dono' => 'required|string',
            'endereco' => 'required|string',
        ]);

        $loja = Loja::create($data);

        return response()->json($loja, 201);
    }

    public function show(Loja $loja)
    {
        return response()->json($loja);
    }

    public function update(Request $request, Loja $loja)
    {
        $data = $request->validate([
            'nome' => 'required|string',
            'cpf' => 'required|string',
            'dono' => 'required|string',
            'endereco' => 'required|string',
        ]);

        $loja->update($data);

        return response()->json($loja);
    }

    public function destroy(Loja $loja)
    {
        $loja->delete();

        return response()->json(null, 204);
    }
}