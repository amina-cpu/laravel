<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */public function up()
    {
    Schema::create('product_images', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('product_color_id');
        $table->string('image_url'); // Path or URL for the image
        $table->timestamps();

        $table->foreign('product_color_id')->references('id')->on('product_colors')->onDelete('cascade');
        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};
