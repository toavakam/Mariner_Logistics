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
        Schema::create('page_blocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id');
            $table->string('block_type', 20);
            $table->longText('text_1')->nullable();
            $table->string('image_1')->nullable();
            $table->longText('text_2')->nullable();
            $table->string('image_2')->nullable();
            $table->foreignId('gallery_id')->nullable();
            $table->string('gmap_url')->nullable();
            $table->boolean('is_active')->default(false);
            $table->unsignedSmallInteger('sort')->default(0);
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages')->cascadeOnDelete();
            $table->foreign('gallery_id')->references('id')->on('galleries')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_blocks');
    }
};
