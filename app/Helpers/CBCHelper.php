<?php

if (! function_exists('formatarSaldoAPI')) {
    function formatarSaldoAPI($numero, $casasDecimais = 2, $separadorDecimal = ',', $separadorMilhar = '')
    {
        return number_format($numero, $casasDecimais, $separadorDecimal, $separadorMilhar);
    }
}

if (! function_exists('formatarSaldoBD')) {

    function formatarSaldoBD($numero, $casasDecimais = 2, $separadorDecimal = '.', $separadorMilhar = '')
    {
        return number_format($numero, $casasDecimais, $separadorDecimal, $separadorMilhar);
    }
}
