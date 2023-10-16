<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_eng');

            $table->string('kunyah')->nullable();
            $table->string('kunyah_eng')->nullable();

            $table->string('laqab')->nullable();
            $table->string('laqab_eng')->nullable();

            $table->smallInteger('birth_year')->nullable();
            $table->tinyInteger('birth_month')->nullable();
            $table->tinyInteger('birth_day')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('birth_place_eng')->nullable();

            $table->smallInteger('death_year')->nullable();
            $table->tinyInteger('death_month')->nullable();
            $table->tinyInteger('death_day')->nullable();
            $table->string('death_place')->nullable();
            $table->string('death_place_eng')->nullable();

            $table->tinyInteger('age')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
