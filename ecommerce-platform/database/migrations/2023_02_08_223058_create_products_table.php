<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increment('id');
            $table->string('ISBN');
            $table->string('title');
            $table->string('author');
            $table->string('description');
            $table->double('price');
            $table->string('image');
            $table->Date('date_published');
            $table->string('publisher');
            $table->foreignId('inventory_id');
            $table->foreignId('category_id');
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
};
