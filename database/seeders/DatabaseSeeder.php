<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            veicletype::class,
            veicle::class,
            subsidiary::class,
            revisions::class,
            person_type::class,
            person::class,
            driver::class,
            rent::class

        ]);
    }
}
