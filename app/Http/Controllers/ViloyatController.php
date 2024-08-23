<?php

namespace App\Http\Controllers;

use App\Models\Viloyat;
use Illuminate\Http\Request;

class ViloyatController extends Controller
{
    public function index()
    {
        $viloyats = Viloyat::all();

        return view('admin.itm',['viloyats' => $viloyats]);
    }
}
