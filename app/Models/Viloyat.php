<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viloyat extends Model
{
    use HasFactory;
    
    protected $table = 'viloyat';
    public function tumanlar()
    {
        return $this->hasMany(Tuman::class);
    }
}
