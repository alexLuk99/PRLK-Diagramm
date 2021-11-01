<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameCrossborder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::table('fcrresults', function (Blueprint $table) {
          //  $table->renameColumn('CROSSBORDER_SETTLEMENTCAPACITY_PRICE_[EUR/MW]', 'CROSSBORDER_SETTLEMENTCAPACITY_PRICE');
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      //  Schema::table('fcrresults', function (Blueprint $table) {
            //$table->renameColumn('CROSSBORDER_SETTLEMENTCAPACITY_PRICE_[EUR/MW]', 'CROSSBORDER_SETTLEMENTCAPACITY_PRICE');
        //});
    }
}
