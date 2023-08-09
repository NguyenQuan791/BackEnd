<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pagecontent', function (Blueprint $table) {
            $table->id();
            $table->integer('pageId');
            $table->integer('soundId')->nullable();
            $table->integer('imageId')->nullable();
            $table->integer('animationId')->nullable();
            $table->string('textContent')->nullable();
            $table->integer('locationX');
            $table->integer('locationY');
            $table->integer('width');
            $table->integer('height');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagecontent');
    }
};
