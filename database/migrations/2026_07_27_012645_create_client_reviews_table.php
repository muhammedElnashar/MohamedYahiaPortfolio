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
        Schema::create('client_reviews', function (Blueprint $table) {
            $table->id();

            $table->string('client_name');
            $table->string('client_subtitle');
            $table->string('avatar_text')->nullable();

            $table->unsignedTinyInteger('rating')->default(5);
            $table->string('rating_time')->nullable();

            $table->text('review');


            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index(['is_active', 'sort_order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_reviews');
    }
};
