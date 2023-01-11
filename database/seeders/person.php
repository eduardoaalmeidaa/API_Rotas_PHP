<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class person extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person')->insert([
            ['person_type_id' => 1, 
            'last_name' => 'Augusto', 
            'first_name' => 'Thiago',
            'adrress' => "Rua C-107",
            'phone' => '62 99090-9090', 
            ]
        ]);
    }
}
 