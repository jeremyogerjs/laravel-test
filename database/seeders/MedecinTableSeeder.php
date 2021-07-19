<?php

namespace Database\Seeders;

use App\Models\Medecin;
use Illuminate\Database\Seeder;

class MedecinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medecin::factory()->count(10)->create();
    }

}
