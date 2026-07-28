<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('case_study_section_settings', function (Blueprint $table) {
            $table->id();

            $table->json('title');
            $table->json('description')->nullable();

            $table->json('button_text')->nullable();
            $table->string('button_url')->nullable();

            // Item 1
            $table->string('icon_1')->nullable();
            $table->json('text_1')->nullable();

            // Item 2
            $table->string('icon_2')->nullable();
            $table->json('text_2')->nullable();

            // Item 3
            $table->string('icon_3')->nullable();
            $table->json('text_3')->nullable();

            // Item 4
            $table->string('icon_4')->nullable();
            $table->json('text_4')->nullable();

            // Item 5
            $table->string('icon_5')->nullable();
            $table->json('text_5')->nullable();

            // Item 6
            $table->string('icon_6')->nullable();
            $table->json('text_6')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('case_study_section_settings');
    }
};
