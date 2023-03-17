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
            $table->id()->onDelete('cascade');
            $table->string('name_product');
            $table->string('desc_product');
            $table->string('banyak_shoot');
            $table->string('banyak_file');
            $table->string('benefit');
            $table->integer('foto_keluarga');
            $table->integer('price');
            $table->string('foto');
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
};
