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
            $table->string('name');          
            $table->text('description');
            $table->string('image') ; 
            $table->integer('price');
            $table->integer('stock');
            $table->integer('discount');
            $table->integer('sku_id');
            $table->integer('model');
            $table->integer('tags');
           
           // $table->unsignedBigInteger('cat_id')->unsigned()->index();
            //$table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');

            $table->unsignedBigInteger('subcat_id')->unsigned()->index();
            $table->foreign('subcat_id')->references('id')->on('scategories')->onDelete('cascade');
            $table->timestamps($precision = 0);
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
