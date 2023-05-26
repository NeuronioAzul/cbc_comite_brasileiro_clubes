<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Clubes;
use Illuminate\Http\Request;

class ClubesController extends Controller
{
    /**
     * Exibir a listagem de Clubes.
     */
    public function index()
    {
        return response()->json(Clubes::all(), 200);
    }

    /**
     * Grava o clube recém-criado no banco de dados
     */
    public function store(Request $request)
    {
        $dados = $request->all();

        $dados['saldo_disponivel'] = str_replace(',', '.', $dados['saldo_disponivel']);

        Clubes::create($dados);

        return response()->json('ok', 200);
    }

    /**
     * Exibe o clube selecionado
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Atualisa o clube no banco de dados.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove o clube do banco de dados
     */
    public function destroy(string $id)
    {
        //
    }
}
