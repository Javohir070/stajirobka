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
        Schema::create('internship_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_info_id')->constrained('user_infos')->cascadeOnDelete();
            $table->string('selection_type',255);
            $table->string('selection_year',255);
            $table->string('year_funded');
            $table->string('year_of_dispatch');
            $table->string('foreign_country');
            $table->string('receiving_organization');
            $table->string('direction_of_practice');
            $table->string('practice_topic');
            $table->string('start_date');
            $table->string('end_date');
            $table->integer('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_infos');
    }
};