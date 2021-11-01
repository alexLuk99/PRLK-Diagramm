<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFcrtendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fcrtenders', function (Blueprint $table) {
            $table->primary(['DATE_TO', 'PRODUCT']);
            $table->date('DATE_FROM');
            $table->date('DATE_TO');
            $table->string('TYPE_OF_RESERVES');
            $table->string('PRODUCT');
            $table->double('TOTAL_DEMAND');
            $table->double('GERMANY_BLOCK_DEMAND');
            $table->double('GERMANY_BLOCK_EXPORT_LIMIT');
            $table->double('GERMANY_BLOCK_CORE_PORTION');
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
        Schema::dropIfExists('fcrtenders');
    }
}
