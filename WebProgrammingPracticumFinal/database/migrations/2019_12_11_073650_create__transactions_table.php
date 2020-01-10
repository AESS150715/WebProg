<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('product_id')->references('product_id')->on('products');
            $table->date('date');
            $table->bigIncrements('trans_id');
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
        Schema::dropIfExists('_transactions');
    }
}
