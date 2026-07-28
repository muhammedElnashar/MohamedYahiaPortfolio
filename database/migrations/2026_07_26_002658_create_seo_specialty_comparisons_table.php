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
        Schema::create('seo_specialty_comparisons', function (Blueprint $table) {
            $table->id();

            $table->foreignId('seo_specialty_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->json('criterion');

            $table->json('specialist_value');
            $table->json('competitor_value');

            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_specialty_comparisons');
    }
};
