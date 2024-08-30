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
        Schema::create('internship_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_info_id')->constrained('user_infos')->cascadeOnDelete();
            $table->string('order_number')->nullable();
            $table->integer('order_period')->nullable();
            $table->string('tracking_app')->nullable();
            $table->string('tracking_number')->nullable();
            $table->string('tracking_decision_number')->nullable();
            $table->string('tracking_decision_date')->nullable();
            $table->string('special_expert_number')->nullable();
            $table->string('special_expert_date')->nullable();
            $table->string('agency_order_number')->nullable();
            $table->string('agency_order_date')->nullable();
            $table->string('contract_number')->nullable();
            $table->string('contract_date')->nullable();
            $table->string('amount')->nullable();
            $table->string('payment_number')->nullable();
            $table->string('date')->nullable();
            $table->string('total_funding_amount')->nullable();
            $table->string('financial_letter_number')->nullable();
            $table->string('financial_letter_date')->nullable();
            $table->string('scientific_letter_number')->nullable();
            $table->string('scientific_letter_date')->nullable();
            $table->string('money_saved')->nullable();
            $table->string('total_payment')->nullable();
            $table->string('proposal_and_program_file')->nullable();
            $table->string('quadripartite_agreement_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_files');
    }
};
