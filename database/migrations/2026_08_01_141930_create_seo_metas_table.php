<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('seo_metas', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Relation
            |--------------------------------------------------------------------------
            */

            $table->morphs('seoable');

            /*
            |--------------------------------------------------------------------------
            | Meta
            |--------------------------------------------------------------------------
            */

            $table->json('meta_title', 70)->nullable();

            $table->json('meta_description')->nullable();

            $table->text('meta_keywords')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Canonical
            |--------------------------------------------------------------------------
            */

            $table->string('canonical_url')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Open Graph
            |--------------------------------------------------------------------------
            */

            $table->string('og_title', 70)->nullable();

            $table->text('og_description')->nullable();

            $table->string('og_image')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Twitter
            |--------------------------------------------------------------------------
            */

            $table->string('twitter_title', 70)->nullable();

            $table->text('twitter_description')->nullable();

            $table->string('twitter_image')->nullable();


            /*
            |--------------------------------------------------------------------------
            | SEO Controls
            |--------------------------------------------------------------------------
            */
            $table->string('robots')->default('index,follow');

            $table->string('focus_keyword')->nullable();
            $table->boolean('is_in_sitemap')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seo_meta');
    }
};
