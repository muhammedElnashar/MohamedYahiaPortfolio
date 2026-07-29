<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('blog_category_id')
                ->nullable()
                ->constrained('blog_categories')
                ->nullOnDelete();

            $table->json('title');
            $table->string('slug')->unique();

            $table->json('excerpt')->nullable();
            $table->json('content');

            $table->string('featured_image')->nullable();

            $table->string('author_name')->nullable();

            $table->unsignedInteger('reading_time')->nullable();

            $table->timestamp('published_at')->nullable();

            // SEO
            $table->json('meta_title')->nullable();
            $table->json('meta_description')->nullable();
            // Status
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index(['is_active', 'published_at']);
            $table->index(['blog_category_id', 'is_active']);
            $table->index(['is_featured', 'is_active']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
