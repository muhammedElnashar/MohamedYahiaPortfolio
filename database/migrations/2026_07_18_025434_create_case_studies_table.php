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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();

            $table->json('eyebrow')->nullable();
            $table->json('title');
            $table->json('description')->nullable();

            $table->json('industry');
            $table->json('niche');

            $table->json('period')->nullable();
            $table->json('focus')->nullable();

            $table->json('challenge');
            $table->json('solution');
            $table->json('result');

            $table->string('metric');
            $table->string('metric_color')->default('#E86A1A');

            $table->string('clicks')->nullable();
            $table->string('impressions')->nullable();
            $table->string('ctr')->nullable();
            $table->string('position')->nullable();

            $table->string('image')->nullable();

            $table->unsignedInteger('sort_order')->default(0);

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
