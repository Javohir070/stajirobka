<?php

namespace App\Http\Controllers;

use App\Models\Higherorganization;
use App\Models\Organization;
use App\Models\Science;
use App\Models\State;
use App\Models\UserInfo;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    
    

    public function index()
    {

        $stajirovka = UserInfo::count();
        $fanyonalish = Science::count();
        $chet_davlat = State::count();
        $higherorganization = Higherorganization::count();
        $tashkilotlar = Organization::count();
        return view('admin.home',['stajirovka'=>$stajirovka, 
        'fanyonalish'=>$fanyonalish, 
        'chet_davlat'=>$chet_davlat,
        'tashkilotlar' => $tashkilotlar,
        'higherorganization' => $higherorganization
    ]);
    }

}
