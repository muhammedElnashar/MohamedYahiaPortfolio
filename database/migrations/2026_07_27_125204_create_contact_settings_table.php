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
        Schema::create('contact_settings', function (Blueprint $table) {
            $table->id();

            $table->json('name');
            $table->json('job_title')->nullable();
            $table->json('description')->nullable();

            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();

            $table->string('linkedin_url')->nullable();
            $table->json('linkedin_label')->nullable();

            $table->string('mostaql_url')->nullable();
            $table->json('mostaql_label')->nullable();

            $table->json('location')->nullable();

            $table->json('consultation_title')->nullable();
            $table->json('consultation_description')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_settings');
    }
};
