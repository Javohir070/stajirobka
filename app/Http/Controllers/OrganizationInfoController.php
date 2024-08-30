<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelOrganizationInfoRequest;
use App\Imports\OrganizationInfoEmport;
use App\Models\Higherorganization;
use App\Models\Organization;
use App\Models\OrganizationInfo;
use App\Models\Tuman;
use App\Models\UserInfo;
use App\Models\Viloyat;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OrganizationInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizationinfos = OrganizationInfo::paginate(20);

        return view('admin.organizationinfo.index',['organizationinfos'=>$organizationinfos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viloyatlar = Viloyat::all();
        $userinfos = UserInfo::all();
        $higherorganizations = Higherorganization::all();
        $organizations = Organization::all();
        return view('admin.organizationinfo.create',[
            'userinfos' => $userinfos,
            'viloyatlar' => $viloyatlar, 
            'higherorganizations' => $higherorganizations,
            'organizations' => $organizations
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorelOrganizationInfoRequest $request)
    {
        
        OrganizationInfo::create([
            "user_info_id" => $request->user_info_id,
            "higherorganization_id" => $request->higherorganization_id,
            "organization_id" => $request->organization_id,
            "order_number" => $request->order_number,
            "organization_type" => $request->organization_type,
            "position" => $request->position,
            "STIR" => $request->STIR,
            "region" => $request->region,
            "district" => $request->district,
        ]);

        return redirect()->route('userinfo.index')->with('status',"Ma'lumotlar muvaffaqiyatli qo'shildi.");

    }

    /**
     * Display the specified resource.
     */
    public function show(OrganizationInfo $organizationinfo)
    {
        return view('admin.organizationinfo.show', ['organizationinfo' => $organizationinfo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrganizationInfo $organizationinfo)
    {
        $userinfos = UserInfo::all();
        return view('admin.organizationinfo.edit',['organizationinfo'=>$organizationinfo,'userinfos'=>$userinfos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorelOrganizationInfoRequest $request, OrganizationInfo $organizationinfo)
    {
        $organizationinfo->update([
            "user_info_id" => $request->user_info_id,
            "higherorganization_id" => $request->higherorganization_id,
            "organization_id" => $request->organization_id,
            "order_number" => $request->order_number,
            "organization_type" => $request->organization_type,
            "position" => $request->position,
            "STIR" => $request->STIR,
            "region" => $request->region,
            "district" => $request->district,
        ]);

        return redirect()->route('userinfo.index')->with('status',"Ma'lumotlar muvaffaqiyatli tahrirlandi.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrganizationInfo $organizationinfo)
    {
        $organizationinfo->delete();

        return redirect()->back()->with('status',"Ma'lumotlar muvaffaqiyatli o'chirildi.");

    }

    public function getTumanlar(Request $request)
    {
        $tumanlar = Tuman::where('viloyat_id', $request->viloyat_id)->get();
        return response()->json($tumanlar);
    }

    public function organizationinfo_import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);
        
        Excel::import(new OrganizationInfoEmport, $request->file('file'));
        
        return redirect()->back()->with('status', 'Xodimlar muvaffaqiyatli yuklandi!');
    }
}
