<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profile_pages', function (Blueprint $table) {

            $table->id();

            // Hero
            $table->json('hero_badge')->nullable();
            $table->json('hero_title');
            $table->json('hero_highlight')->nullable();
            $table->json('hero_description')->nullable();

            // Story
            $table->json('story_title')->nullable();
            $table->json('story_content')->nullable();

            // Section Titles
            $table->json('career_title')->nullable();
            $table->json('education_title')->nullable();
            $table->json('methodology_title')->nullable();
            $table->json('skills_title')->nullable();

            // CTA
            $table->json('cta_title')->nullable();
            $table->json('cta_description')->nullable();
            $table->json('cta_button')->nullable();
            $table->string('cta_url')->nullable();

            // SEO
            $table->json('meta_title')->nullable();
            $table->json('meta_description')->nullable();
            $table->string('canonical_url')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profile_pages');
    }
};
