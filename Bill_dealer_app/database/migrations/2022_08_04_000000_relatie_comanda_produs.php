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
        Schema::create('relatie_comanda_produs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_comanda');
            $table->integer('id_produs');
            $table->string('cantitate');
            $table->string('tva');
            $table->string('valoare');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relatie_comanda_produs');
    }
};
