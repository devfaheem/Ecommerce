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
            //
            $table->increments('id');
            $table->string('sku');
            $table->integer('productcategory_id')->unsigned()->index();
            $table->foreign('productcategory_id')->references('id')->on('product_categories');
            $table->integer('brand_id')->unsigned()->index();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->string('name'); 
            $table->text('description')->nullable(); 
            $table->integer('quantity');
            $table->decimal('price');
            $table->string('image');
             $table->string('image1');
              $table->string('image2');
               $table->string('image3');
            $table->integer('status')->default(0);
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
