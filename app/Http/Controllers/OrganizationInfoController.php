<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelOrganizationInfoRequest;
use App\Models\OrganizationInfo;
use App\Models\UserInfo;

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
        $userinfos = UserInfo::all();
        return view('admin.organizationinfo.create',['userinfos' => $userinfos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorelOrganizationInfoRequest $request)
    {
        
        OrganizationInfo::create([
            "user_info_id" => $request->user_info_id,
            "higher_organization" => $request->higher_organization,
            "organization_type" => $request->organization_type,
            "organization_name" => $request->organization_name,
            "position" => $request->position,
            "STIR" => $request->STIR,
            "region" => $request->region,
            "district" => $request->district,
        ]);

        return redirect()->route('organizationinfo.index')->with('status',"Ma'lumotlar muvaffaqiyatli qo'shildi.");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
            "higher_organization" => $request->higher_organization,
            "organization_type" => $request->organization_type,
            "organization_name" => $request->organization_name,
            "position" => $request->position,
            "STIR" => $request->STIR,
            "region" => $request->region,
            "district" => $request->district,
        ]);

        return redirect()->route('organizationinfo.index')->with('status',"Ma'lumotlar muvaffaqiyatli tahrirlandi.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrganizationInfo $organizationinfo)
    {
        $organizationinfo->delete();

        return redirect()->back()->with('status',"Ma'lumotlar muvaffaqiyatli o'chirildi.");

    }
}
