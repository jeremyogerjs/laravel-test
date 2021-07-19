<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class reservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Patient::factory(10)-> has->create();
    }
}
