<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class revisions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('revisions')->insert([
            ['description' => 'Troca de óleo' ], 
            ['description' => 'Revezamento de pneus'],
            ['description' => 'Troca de filtro de ar'], 
            ['description' => 'Amortecedores'], 
            ['description' => 'Retífica de motor'], 
            ['description' => 'Faróis'], 
            ['description' => 'Lanternagem'], 
            ['description' => 'Retífica de motor'], 
            ['description' => 'Faróis'], 
            ['description' => 'Lanternagem'], 
        ]);
    }
}
