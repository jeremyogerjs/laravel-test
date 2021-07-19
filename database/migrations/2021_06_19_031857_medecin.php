<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Medecin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecin',function(Blueprint $table) {
            $table ->bigIncrements('id');
            $table -> string('lastName',255);
            $table -> string('firstName',255);
            $table -> string('email',255) ->unique();
            $table -> date('created_at');
            $table -> date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medecin');
    }
}
