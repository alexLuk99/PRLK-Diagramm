<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlltendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alltenders', function (Blueprint $table) {
            $table->id();
            $table->date('DATE_FROM');
            $table->date('DATE_TO');
            $table->string('PRODUCT');
            $table->double('OFFERED_CAPACITY_PRICE');
            $table->integer('ALLOCATED_CAPACITY');
            $table->string('COUNTRY');
            $table->double('SETTLEMENTCAPACITY_PRICE');
            $table->rememberToken();
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
        Schema::dropIfExists('alltenders');
    }
}
