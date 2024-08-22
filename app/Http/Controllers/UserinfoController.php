<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelUserinfoRequest;
use App\Http\Requests\UpdateUserinfoRequest;
use App\Models\FinalReport;
use App\Models\InternshipFile;
use App\Models\InternshipInfo;
use App\Models\OrganizationInfo;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userinfos = UserInfo::all();

        return view('admin.userinfo.index',['userinfos'=>$userinfos]);
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.userinfo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorelUserinfoRequest $request)
    {
        if($request->hasFile('image')){
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('post-photos', $name);
        }
        UserInfo::create([
            "firs_name" =>$request->firs_name,
            "last_name" =>$request->last_name,
            "middle_name" =>$request->middle_name,
            "birthday" =>$request->birthday,
            "jshshri" =>$request->jshshri,
            "gender" =>$request->gender,
            "academic_degree" =>$request->academic_degree,
            "certificate" =>$request->certificate,
            "phone" => $request->phone,
            "image" => $path ?? "yoq",
        ]);

        return redirect()->route('userinfo.index')->with('status',"Ma'lumotlar muvaffaqiyatli qo'shildi.");
    }

    /**
     * Display the specified resource.
     */
    public function show(UserInfo $userinfo)
    {
        $userinfoId = $userinfo->id;
        $organizationinfos = OrganizationInfo::where('user_info_id', $userinfoId)->get();
        $internshipinfos = InternshipInfo::where('user_info_id', $userinfoId)->get();
        $internshipfiles = InternshipFile::where('user_info_id', $userinfoId)->get(); 
        $finalreports = FinalReport::where('user_info_id', $userinfoId)->get();
        return view('admin.userinfo.show', [
            'userinfo' => $userinfo,
            'organizationinfos' => $organizationinfos,
            'internshipinfos'=>$internshipinfos,
            'internshipfiles' => $internshipfiles,
            'finalreports' => $finalreports
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserInfo $userinfo)
    {
        return view('admin.userinfo.edit',['userinfo'=>$userinfo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserinfoRequest $request, UserInfo $userinfo)
    {
        if($request->hasFile('image')){
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('post-photos', $name);
        }
        $userinfo->update([
            "firs_name" =>$request->firs_name,
            "last_name" =>$request->last_name,
            "middle_name" =>$request->middle_name,
            "birthday" =>$request->birthday,
            "jshshri" =>$request->jshshri,
            "gender" =>$request->gender,
            "academic_degree" =>$request->academic_degree,
            "certificate" =>$request->certificate,
            "phone" => $request->phone,
            "image" => $path ?? $userinfo->image,
        ]);

        return redirect()->route('userinfo.index')->with('status',"Ma'lumotlar muvaffaqiyatli yangilandi.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserInfo $userinfo)
    {
        if(isset($userinfo->image)){
            Storage::delete($userinfo->image);
        }
        $userinfo->delete();
        return redirect()->back()->with('status',"Ma'lumotlar muvaffaqiyatli o'chirildi.");
    }
}
