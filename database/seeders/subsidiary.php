<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class subsidiary extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subsidiary')->insert([
            ['description' => 'Matriz' ], 
            ['description' => 'Filial 1'],
            ['description' => 'Filial 2'], 
        ]);
    }
}
