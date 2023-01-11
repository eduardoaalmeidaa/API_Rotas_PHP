<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class driver extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('driver')->insert([
            ['person_id' => 1, 
            'driver_license' => '0909-0903-090ABC', 
            'valid_at' => '2029-01-12 17:30:10', 
            'adrress' => "Rua C-107",
            'phone' => '62 99090-9090', 
            ]
        ]);

 
    }
}
