<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcessibilidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_acessibilidades')->insert(
            [
                [
                    'tipo' => 'Elevador'
                ],
                [
                    'tipo' => 'Rampa'
                ],
                [
                    'tipo' => 'Não possui acessibilidade'
                ]
            ]
                );
    }
}
