<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_info_id',
        'yuq_tashkilot',
        'tashkilot',
        'organization_id',
        'higherorganization_id',
        'order_number',
        'organization_type',
        'position',
        'STIR',
        'region',
        'district'
    ];

    public function userinfo(){
        return $this->belongsTo(UserInfo::class, 'user_info_id');
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function higherorganization()
    {
        return $this->belongsTo(Higherorganization::class);
    }

}
