<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_info_id',
        'order_number',
        'higher_organization',
        'organization_type',
        'organization_name',
        'position',
        'STIR',
        'region',
        'district'
    ];

    public function userinfo(){
        return $this->belongsTo(UserInfo::class, 'user_info_id');
    }

}
