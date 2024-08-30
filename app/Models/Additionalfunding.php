<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additionalfunding extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_info_id', 
            'order_number', 
            'additional_amount', 
            'additional_charge_number', 
            'additional_date', 
            'total_funding', 
            'report_letter_number', 
            'report_letter_date', 
            'money_saved_sum', 
            'money_saved_boshqa', 
            'refund_amount', 
            'returned_currency', 
            'return_date', 
            'additional_refund_amount', 
            'additional_returned_currency', 
            'additional_refund_date', 
            'additional_refund_total', 
            'total_payment',
        ];

    public function userinfo(){
        return $this->belongsTo(UserInfo::class, 'user_info_id');
    }
    
}
