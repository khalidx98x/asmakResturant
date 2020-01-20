<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('floor_manager_id');
            $table->unsignedBigInteger('floor_id');
            $table->unsignedBigInteger('table_id');	

            $table->enum('transaction_end_state', ['1', '2'])->default('1');
            $table->date('EndDate')->nullable();

            $table->foreign('floor_manager_id')->references('id')->on('floor_managers');
            $table->foreign('floor_id')->references('id')->on('floors');
            $table->foreign('table_id')->references('id')->on('tables');

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
        Schema::dropIfExists('table_transactions');
    }
}
