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
        Schema::create('home_sections', function (Blueprint $table) {
            $table->id();

            $table->string('section_key')->unique();

            $table->json('eyebrow')->nullable();

            $table->json('title');

            $table->json('subtitle')->nullable();

            $table->json('badge')->nullable();

            $table->json('button_text')->nullable();

            $table->string('button_url')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sections');
    }
};
