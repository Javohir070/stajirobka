<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipFile extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_info_id',
            'order_number',
            'order_period',
            'tracking_app',
            'tracking_number',
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
            'proposal_and_program_file',
            'quadripartite_agreement_file',
        ];
        
        public function userinfo(){
            return $this->belongsTo(UserInfo::class, 'user_info_id');
        }
}
