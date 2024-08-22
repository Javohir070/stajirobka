<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelInternshipInfoRequest;
use App\Models\InternshipInfo;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class InternshipInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internshipinfos = InternshipInfo::paginate(20);

        return view('admin.internshipinfo.index', ['internshipinfos' => $internshipinfos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userinfos = UserInfo::all();
        return view('admin.internshipinfo.create', ['userinfos' => $userinfos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorelInternshipInfoRequest $request)
    {

        InternshipInfo::create([
            "user_info_id" => $request->user_info_id,
            "order_number" => $request->order_number,
            "selection_type" => $request->selection_type,
            "selection_year" => $request->selection_year,
            "year_funded" => $request->year_funded,
            "year_of_dispatch" => $request->year_of_dispatch,
            "foreign_country" => $request->foreign_country,
            "receiving_organization" => $request->receiving_organization,
            "direction_of_practice" => $request->direction_of_practice,
            "practice_topic" => $request->practice_topic,
            "start_date" => $request->start_date,
            "end_date" => $request->end_date,
            "age" => $request->age,
        ]);

        return redirect()->route('userinfo.index')->with('status', "Ma'lumotlar muvaffaqiyatli qo'shildi.");

    }

    /**
     * Display the specified resource.
     */
    public function show(InternshipInfo  $internshipinfo)
    {
        return view('admin.internshipinfo.show',['internshipinfo'=>$internshipinfo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InternshipInfo $internshipinfo)
    {
        $userinfos = UserInfo::all();
        return view('admin.internshipinfo.edit', ['internshipinfo' => $internshipinfo,'userinfos'=>$userinfos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorelInternshipInfoRequest $request, InternshipInfo $internshipinfo)
    {
        $internshipinfo->update([
            "user_info_id" => $request->user_info_id,
            "order_number" => $request->order_number,
            "selection_type" => $request->selection_type,
            "selection_year" => $request->selection_year,
            "year_funded" => $request->year_funded,
            "year_of_dispatch" => $request->year_of_dispatch,
            "foreign_country" => $request->foreign_country,
            "receiving_organization" => $request->receiving_organization,
            "direction_of_practice" => $request->direction_of_practice,
            "practice_topic" => $request->practice_topic,
            "start_date" => $request->start_date,
            "end_date" => $request->end_date,
            "age" => $request->age,
        ]);

        return redirect()->route('userinfo.index')->with('status', "Ma'lumotlar muvaffaqiyatli qo'shildi.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InternshipInfo $internshipinfo)
    {
        $internshipinfo->delete();

        return redirect()->back()->with('status',"Ma'lumotlar muvaffaqiyatli o'chirildi.");
    }
}
