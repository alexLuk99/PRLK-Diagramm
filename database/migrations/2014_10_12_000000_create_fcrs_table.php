<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFcrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fcrs', function (Blueprint $table) {
            $table->id();
            $table->date('DATE_FROM');
            $table->date('DATE_TO');
            $table->string('PRODUCT_TYPE');
            $table->integer('TENDER_NUMBER');
            $table->string('PRODUCTNAME');
            $table->double('CROSSBORDER_SETTLEMENTCAPACITY_PRICE_[EUR/MW]');
            $table->double('DE_DEMAND_[MW]');
            $table->double('DE_SETTLEMENTCAPACITY_PRICE_[EUR/MW]');
            $table->double('DE_IMPORT(-)_EXPORT(+)_[MW]');
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
        Schema::dropIfExists('fcrs');
    }
}
