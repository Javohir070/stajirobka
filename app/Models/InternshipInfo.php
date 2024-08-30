<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipInfo extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_info_id',
        'state_id',
        'science_id',
        'order_number',
        'selection_type',
        'selection_year',
        'year_funded',
        'year_of_dispatch',
        'receiving_organization',
        'practice_topic',
        'start_date',
        'end_date',
        'age',
        'xorijiy_mamlakat',
        'stajirovka_yon'
    ];

    public function userinfo(){
        return $this->belongsTo(UserInfo::class, 'user_info_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function science()
    {
        return $this->belongsTo(Science::class);
    }

    
}
