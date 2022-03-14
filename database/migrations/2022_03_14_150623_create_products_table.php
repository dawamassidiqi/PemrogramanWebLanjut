<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string("productName");
            $table->string("desc");
            $table->string("measurments");
            $table->string("material");
            $table->string("wire");
            $table->string("condition");
            $table->string("skuNumber");
            $table->string("shipping");
            $table->string("warranty");
            $table->string("delivery");
            $table->float("price");
            $table->integer("like");
            
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
        Schema::dropIfExists('products');
    }
}
