<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuman extends Model
{
    use HasFactory;

    protected $table = 'tuman';

    public function viloyat()
    {
        return $this->belongsTo(Viloyat::class);
    }
}
