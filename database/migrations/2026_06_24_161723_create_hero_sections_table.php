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
        Schema::create('hero_sections', function (Blueprint $table) {

            $table->id();

            $table->json('badge');

            $table->json('first_name');

            $table->json('last_name');

            $table->json('position');

            $table->json('title');
            $table->json('hero_role');
            $table->json('description');

            $table->string('whatsapp_url');

            $table->string('portfolio_url');

            $table->string('avatar')->nullable();
            $table->json('card_name');

            $table->json('card_role');


            $table->unsignedInteger('projects_count');

            $table->unsignedInteger('years_count');

            $table->unsignedInteger('completion_count');

            $table->decimal('rating_count', 3, 1);

            $table->json('mostaql_projects');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
