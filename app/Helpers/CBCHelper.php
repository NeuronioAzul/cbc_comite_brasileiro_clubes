<?php

if (! function_exists('formatarSaldoAPI')) {
    /**
     * Formatar saldo para o formato padrão de exibição
     *
     * @param float $numero Valor tipo float 123.11
     * @return string Número no formato 1010,00
     */
    function formatarSaldoAPI(float $numero = 0)
    {
        return number_format($numero, 2, ',', '');
    }
}

if (! function_exists('formatarSaldoBD')) {

    /**
     * Formata o saldo para inserir no banco de dados
     *
     * @param string $numero Nos formatos 1,001.01 ou 1.001,01
     * @return string O número no formato 1010.10
     */
    function formatarSaldoBD(string $numero = '0')
    {
        // Remover símbolos de formatação
        $numero = str_replace([',','.'], '', $numero);

        // Converter o valor para float
        $numero = floatval($numero);

        // Formata o valor
        $numero = number_format($numero, 2, '.', '');

        return $numero;
    }
}
