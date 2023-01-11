<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class veicle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('veicle')->insert([
            ['license_plate' => 'XXX-0000', 'vin' => 'asdas123123', 'color' => 'cinza', 'model' => 'Pegeout', 'veicletype_id' => 1], 
            ['license_plate' => 'YYY-1111', 'vin' => 'babab324354', 'color' => 'preto', 'model' => 'L200', 'veicletype_id' => 6], 
        ]); 
    }
}
