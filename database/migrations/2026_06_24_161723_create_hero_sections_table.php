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

            $table->string('badge');

            $table->string('first_name');

            $table->string('last_name');

            $table->string('position');

            $table->string('title');
            $table->text('hero_role');
            $table->text('description');

            $table->string('whatsapp_url');

            $table->string('portfolio_url');

            $table->string('avatar')->nullable();
            $table->string('card_name');

            $table->string('card_role');


            $table->unsignedInteger('projects_count');

            $table->unsignedInteger('years_count');

            $table->unsignedInteger('completion_count');

            $table->decimal('rating_count', 3, 1);

            $table->string('mostaql_projects');


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
