<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFcrresultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fcrresults', function (Blueprint $table) {
            $table->primary(['DATE_TO', 'PRODUCTNAME']);
            $table->date('DATE_FROM');
            $table->date('DATE_TO');
            $table->string('PRODUCT_TYPE');
            $table->integer('TENDER_NUMBER');
            $table->string('PRODUCTNAME');
            $table->double('CROSSBORDER_SETTLEMENTCAPACITY_PRICE');
            $table->double('DE_DEMAND');
            $table->double('DE_SETTLEMENTCAPACITY_PRICE');
            $table->double('DE_IMPORT_EXPORT');
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
        Schema::dropIfExists('fcrresults');
    }
}
