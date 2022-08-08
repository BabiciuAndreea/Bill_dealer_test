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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('cif');
            $table->string('nr_reg')->unique();
            $table->string('city');
            $table->string('county');
            $table->string('address');
            $table->string('caen');
            $table->string('capital');
            $table->string('tva');
            $table->string('iban');
            $table->string('phone');
            $table->string('email');
            $table->string('format_pdf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
