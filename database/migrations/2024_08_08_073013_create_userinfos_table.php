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
        Schema::create('userinfos', function (Blueprint $table) {
            $table->id();
            $table->string('firs_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('birthday');
            $table->string('jshshri');
            $table->string('gender');
            $table->string('phone');
            $table->string('academic_degree');
            $table->string('certificate');
            $table->string('image', 600);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userinfos');
    }
};
