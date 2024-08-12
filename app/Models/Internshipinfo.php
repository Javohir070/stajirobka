<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internshipinfo extends Model
{
    use HasFactory;

    protected $fillable = [
            'userinfo_id',
            'order_period',
            'tracking_decision_number',
            'tracking_decision_date',
            'special_expert_number',
            'special_expert_date',
            'agency_order_number',
            'agency_order_date',
            'contract_number',
            'contract_date',
            'amount',
            'payment_number',
            'date',
            'total_funding_amount',
            'financial_letter_number',
            'financial_letter_date',
            'scientific_letter_number',
            'scientific_letter_date',
            'money_saved',
            'total_payment',
            'follow_up_letter',
            'council_decision',
            'scientific_report',
            'financial_reporting',
            'sxplanation'
        ];
}
