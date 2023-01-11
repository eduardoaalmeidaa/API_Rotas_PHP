<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB;
class person_type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person_types')->insert([
            ['description' => 'Pessoa Física' ],
            ['description' => 'Pessoa Jurídica']
        ]);
    }
}
