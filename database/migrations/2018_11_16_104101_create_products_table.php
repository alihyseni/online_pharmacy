<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration; 

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brands_id')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('ingredients')->nullable();
            $table->text('usage')->nullable();
            $table->float('price')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->foreign('brands_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
