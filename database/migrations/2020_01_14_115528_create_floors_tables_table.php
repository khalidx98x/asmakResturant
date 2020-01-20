<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFloorsTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floors_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('floor_id');
            $table->unsignedBigInteger('table_id');
        
            // $table->foreign('floor_id')->references('id')->on('floors');
            // $table->foreign('table_id')->references('id')->on('tables');
        
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
        Schema::dropIfExists('floors_tables');
    }
}
