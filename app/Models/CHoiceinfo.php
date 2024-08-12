<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CHoiceinfo extends Model
{
    use HasFactory;

    protected $fillable =[
        'userinfo_id',
        'selection_type',
        'selection_year',
        'year_funded',
        'year_of_dispatch',
        'foreign_country',
        'receiving_organization',
        'direction_of_practice',
        'practice_topic',
        'start_date',
        'end_date',
        'age'
    ];
}
