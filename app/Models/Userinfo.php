<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
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
}
