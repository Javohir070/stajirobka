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
        Schema::create('internshipinfos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userinfo_id')->constrained()->cascadeOnDelete();
            $table->integer('order_period');
            $table->string('tracking_decision_number');
            $table->string('tracking_decision_date');
            $table->string('special_expert_number');
            $table->string('special_expert_date');
            $table->string('agency_order_number');
            $table->string('agency_order_date');
            $table->string('contract_number');
            $table->string('contract_date');
            $table->string('amount');
            $table->string('payment_number');
            $table->string('date');
            $table->string('total_funding_amount');
            $table->string('financial_letter_number');
            $table->string('financial_letter_date');
            $table->string('scientific_letter_number');
            $table->string('scientific_letter_date');
            $table->string('money_saved');
            $table->string('total_payment');
            $table->string('follow_up_letter');
            $table->string('council_decision');
            $table->string('scientific_report');
            $table->string('financial_reporting');
            $table->text('sxplanation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internshipinfos');
    }
};
