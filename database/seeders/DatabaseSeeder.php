<?php

namespace Database\Seeders;

use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Reservation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Medecin::factory()->count(10)->create();
        //Patient::factory()->count(10)->create();
        //Reservation::Factory()->count(10)->create();
    }
}
