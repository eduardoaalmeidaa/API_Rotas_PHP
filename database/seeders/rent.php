<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rent')->insert([
            [
                'start' => '2023-01-03 13:30:10', 
                'end' => '2023-01-12 17:30:10', 
                'value' => 3500,
                'driver_id' => 1, 
                'subsidiary_dest_id' => 1, 
                "veicle_id" => 1
            ]
        ]);
    }
}