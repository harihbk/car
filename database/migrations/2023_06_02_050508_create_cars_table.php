<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id('id');
            $table->string('price');
            $table->string('make');
            $table->string('modelc');
            $table->string('kmdriven');
            $table->string('transmission');
            $table->string('fueltype');
            $table->date('registrationyear');
            $table->string('noofowner');
            $table->date('insurancevalidity');
            $table->string('insurancetype');
            $table->string('rto');
            $table->string('carlocation');
            $table->string('makeyear');
            $table->string('emi');
            $table->string('address');
            $table->string('profile');
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cars');
    }
}
