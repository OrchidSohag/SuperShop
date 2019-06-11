<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();;
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->integer('product_id')->unsigned();;
            $table->foreign('product_id')->references('product_id')->on('products');
            $table->integer('quantity');
            $table->integer('total_amount');
            $table->integer('paid_amount');
            $table->integer('due_amount');
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
        Schema::dropIfExists('sales');
    }
}
