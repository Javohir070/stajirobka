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
        Schema::create('organization_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_info_id')->constrained('user_infos')->cascadeOnDelete();
            $table->foreignId('organization_id')->constrained()->nullable();
            $table->foreignId('higherorganization_id')->constrained()->nullable();
            $table->string('order_number')->nullable();
            $table->string('organization_type')->nullable();
            $table->string('position')->nullable();
            $table->string('STIR')->nullable();
            $table->string('region')->nullable();
            $table->string('district')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organization_infos');
    }
};
