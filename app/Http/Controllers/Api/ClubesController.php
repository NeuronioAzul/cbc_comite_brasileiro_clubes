<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Clubes;
use App\Models\Recursos;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClubesController extends Controller
{
    /**
     * Exibir a listagem de Clubes.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Clubes::all(), 200);
    }

    /**
     * Grava o clube recém-criado no banco de dados
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $dados = $request->all();

        // Trata os valores do saldo antes de inserir na tabela
        $dados['saldo_disponivel'] = formatarSaldoBD($dados['saldo_disponivel']);

        Clubes::create($dados);

        return response()->json('ok', 200);
    }

    /**
     * Consome recursos da tabela de recursos e do clube
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function consumirRecurso(Request $request): JsonResponse
    {
        $clubeId = $request->input('clube_id');
        $recursoId = $request->input('recurso_id');
        $valorConsumo = formatarSaldoBD($request->input('valor_consumo'));

        // Buscar o clube e recurso no banco de dados
        $clube = Clubes::find($clubeId);
        $recurso = Recursos::find($recursoId);

        // Verificar se o saldo disponível do clube é suficiente para o consumo
        if ($clube->saldo_disponivel < $valorConsumo) {
            return response()->json('O saldo disponível do clube é insuficiente', 400);
        }

        // Atualizar os saldos
        $saldoAnterior = $clube->saldo_disponivel;
        $saldoAtual = $saldoAnterior - $valorConsumo;

        // Atualizar o saldo do clube
        $clube->saldo_disponivel = $saldoAtual;
        $clube->save();

        // Atualizar o saldo do recurso
        $recurso->saldo_disponivel -= $valorConsumo;
        $recurso->save();

        // Retornar a resposta com os saldos atualizados
        return response()->json(
            [
                'clube' => $clube->clube,
                'saldo_anterior' => formatarSaldoAPI($saldoAnterior),
                'saldo_atual' => formatarSaldoAPI($saldoAtual)
            ],
            200
        );
    }
}
