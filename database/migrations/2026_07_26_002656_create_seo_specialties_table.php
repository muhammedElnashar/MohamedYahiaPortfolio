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
        Schema::create('seo_specialties', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();

            $table->json('name');
            $table->json('card_description')->nullable();

            // Hero
            $table->json('badge')->nullable();
            $table->json('title');
            $table->json('description')->nullable();



            // Challenges section
            $table->json('challenges_badge')->nullable();
            $table->json('challenges_title')->nullable();

            // Services section
            $table->json('services_badge')->nullable();
            $table->json('services_title')->nullable();

            // Process section
            $table->json('process_badge')->nullable();
            $table->json('process_title')->nullable();

            // Advantages
            $table->json('advantages_badge')->nullable();
            $table->json('advantages_title')->nullable();

            // Methodology
            $table->json('methodology_badge')->nullable();
            $table->json('methodology_title')->nullable();
            $table->json('methodology_description')->nullable();

            // Statistics
            $table->json('statistics_badge')->nullable();
            $table->json('statistics_title')->nullable();
            $table->json('statistics_description')->nullable();

            // Comparison
            $table->json('comparison_badge')->nullable();
            $table->json('comparison_title')->nullable();
            $table->json('comparison_competitor_label')->nullable();

            // FAQ
            $table->json('faq_badge')->nullable();
            $table->json('faq_title')->nullable();

            // Philosophy
            $table->json('philosophy_badge')->nullable();
            $table->json('philosophy_title')->nullable();
            $table->json('philosophy_quote')->nullable();

            // CTA
            $table->json('cta_title')->nullable();
            $table->json('cta_description')->nullable();
            $table->json('cta_button')->nullable();
            $table->string('cta_url')->nullable();

            // SEO
            $table->json('meta_title')->nullable();
            $table->json('meta_description')->nullable();
            $table->string('canonical_url')->nullable();
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
        Schema::dropIfExists('seo_specialties');
    }
};
