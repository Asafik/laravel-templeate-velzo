<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProgramStudi;

class ProgramStudiSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan 100 data acak
        \App\Models\ProgramStudi::factory(100)->create();
    }
}
