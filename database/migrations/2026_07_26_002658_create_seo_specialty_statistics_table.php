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
        Schema::create('seo_specialty_statistics', function (Blueprint $table) {
            $table->id();

            $table->foreignId('seo_specialty_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('value');

            $table->string('badge')->nullable();

            $table->json('description')->nullable();

            $table->string('source')->nullable();
            $table->string('source_url')->nullable();

            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_specialty_statistics');
    }
};
