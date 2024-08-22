<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'firs_name',
        'middle_name',
        'birthday',
        'jshshri',
        'gender',
        'phone',
        'academic_degree',
        'certificate',
        'image'
    ];

    public function internshipfiles()
    {
        return $this->hasMany(InternshipFile::class);
    }

    public function internshipinfos()
    {
        return $this->hasMany(InternshipInfo::class);
    }

    public function organizationinfos()
    {
        return $this->hasMany(OrganizationInfo::class);
    }

    
}
