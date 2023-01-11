<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class veicletype extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('veicletype')->insert([
            ['description' => 'Compacto' ], 
            ['description' => 'Automatico'],
            ['description' => 'SUV'],
            ['description' => 'Pick-up'],
            ['description' => 'Furgão'],
            ['description' => '4x4'],
            ['description' => 'Van'],
        ]);
    }
}
