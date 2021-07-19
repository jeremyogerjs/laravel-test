<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation',function(Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> date('dateMeeting');
            $table -> time('hourMeeting');
            $table -> foreignId('idMedecin')->references('id')->on('medecin');
            $table -> foreignId('idPatient')->references('id')->on('patient');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}
