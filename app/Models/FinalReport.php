<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalReport extends Model
{
    use HasFactory;

    protected $fillable = ['user_info_id',  'order_number', 'follow_up_letter', 'council_decision', 'scientific_report', 'financial_reporting'];

    public function userinfo(){
        return $this->belongsTo(UserInfo::class, 'user_info_id');
    }
}
