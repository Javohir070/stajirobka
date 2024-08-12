<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'userinfo_id',
        'higher_organization',
        'organization_type',
        'organization_name',
        'position',
        'STIR',
        'region',
        'district'
    ];
}
