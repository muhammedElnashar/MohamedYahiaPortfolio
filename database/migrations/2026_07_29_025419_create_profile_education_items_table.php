<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profile_education_items', function (Blueprint $table) {

            $table->id();

            $table->foreignId('profile_page_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->json('title');

            $table->json('subtitle')->nullable();

            $table->json('description')->nullable();

            $table->string('icon')->nullable();

            $table->string('url')->nullable();

            $table->unsignedInteger('sort_order')->default(0);

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profile_education_items');
    }
};
