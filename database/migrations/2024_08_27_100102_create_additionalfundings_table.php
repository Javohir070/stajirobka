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
        Schema::create('additionalfundings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_info_id')->constrained('user_infos')->cascadeOnDelete();
            $table->string('order_number')->nullable();
            $table->string('additional_amount')->nullable();
            $table->string('additional_charge_number')->nullable();
            $table->string('additional_date')->nullable();
            $table->string('total_funding')->nullable();
            $table->string('report_letter_number')->nullable();
            $table->string('report_letter_date')->nullable();
            $table->string('money_saved_sum')->nullable();
            $table->string('money_saved_boshqa')->nullable();
            $table->string('refund_amount')->nullable();
            $table->string('returned_currency')->nullable();
            $table->string('return_date')->nullable();
            $table->string('additional_refund_amount')->nullable();
            $table->string('additional_returned_currency')->nullable();
            $table->string('additional_refund_date')->nullable();
            $table->string('additional_refund_total')->nullable();
            $table->string('total_payment')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additionalfundings');
    }
};
