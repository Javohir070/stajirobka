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
            $table->foreignId('state_id')->constrained();
            $table->foreignId('science_id')->constrained();
            $table->string('order_number')->nullable();
            $table->string('selection_type',255)->nullable();
            $table->string('selection_year',255)->nullable();
            $table->string('year_funded')->nullable();
            $table->string('year_of_dispatch')->nullable();
            $table->string('receiving_organization')->nullable();
            $table->string('practice_topic')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->integer('age')->nullable();
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