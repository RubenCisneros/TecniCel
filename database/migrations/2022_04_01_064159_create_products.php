<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
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
            $table->string('name', 60);
            $table->string('barcode', 12);
            $table->decimal('cost', 8, 2);
            $table->decimal('price', 8, 2);
            $table->unsignedSmallInteger('stock');
            $table->text('description');
            $table->unsignedTinyInteger('discount');
            $table->softDeletes();
            $table->timestamps();

            $table->foreignId('category_id')->constrained();
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
