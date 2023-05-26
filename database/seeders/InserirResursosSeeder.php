<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InserirResursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recursos')->insert([
            ["recurso" => "Recurso para passagens","saldo_disponivel" => 10000.00],
            ["recurso" => "Recurso para hospedagens","saldo_disponivel" => 10000.00]
        ]);
    }
}
