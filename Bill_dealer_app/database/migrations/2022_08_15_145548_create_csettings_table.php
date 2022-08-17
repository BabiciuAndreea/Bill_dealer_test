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
        Schema::create('csettings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('cif');
            $table->string('nr_reg');
            $table->string('city');
            $table->string('county');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('caen');
            $table->string('capital');
            $table->string('tva')->default('no');
            $table->string('iban');
            //$table->string('format_pdf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csettings');
    }
};
