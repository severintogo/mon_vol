<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vol', function (Blueprint $table) {
            $table->id();
            $table->string('code_vol');
            $table->string('nombre_place_class_A');
            $table->string('prix_affaire');
            $table->string('nombre_place_class_B');
            $table->string('prix_business');
            $table->string('Date_depart');
            $table->string('Heure_depart');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vol');
    }
};
