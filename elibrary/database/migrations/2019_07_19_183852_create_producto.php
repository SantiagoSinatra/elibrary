<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name_prod');
            $table->string('barcode')->nullable();
            $table->decimal('price');
            $table->string('pic_prod')->nullable();
            $table->unsignedInteger('category_id');

           /*  $table->foreign('category_id')
            ->references('id')
            ->on('categoria')
            ->onDelete('cascade'); */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
