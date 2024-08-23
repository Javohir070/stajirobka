<?php

namespace App\Http\Controllers;

use App\Models\OrganizationInfo;
use App\Models\Viloyat;
use Illuminate\Http\Request;

class ViloyatController extends Controller
{
    public function index()
    {
        $viloyats = Viloyat::all();

        return view('admin.itm',['viloyats' => $viloyats]);
    }


    public function tashkilotlar()
    {
        $otm = OrganizationInfo::where('organization_type', 'Oliy ta’lim')->count();
        $itm = OrganizationInfo::where('organization_type', 'Ilmiy tadqiqot muassasi')->count();

        return view('admin.admin', ['otm' =>$otm, 'itm' => $itm]);
    }

    public function otm()
    {
        $organizationinfos = OrganizationInfo::where('organization_type', 'Oliy ta’lim')->paginate(20);

       
        return view('admin.tashkilotlar.otm', ['organizationinfos' => $organizationinfos]);
    }

    public function itm()
    {
        $organizationinfos = OrganizationInfo::where('organization_type', 'Ilmiy tadqiqot muassasi')->paginate(20);

       
        return view('admin.tashkilotlar.itm', ['organizationinfos' => $organizationinfos]);

    }
}
