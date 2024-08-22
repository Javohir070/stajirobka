<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelFinalReportRequest;
use App\Models\FinalReport;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FinalReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internshipfiles = FinalReport::paginate(20);

        return view('admin.finalreport.index', ['internshipfiles' => $internshipfiles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userinfos = UserInfo::get();

        return view('admin.finalreport.create', ['userinfos' => $userinfos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorelFinalReportRequest $request)
    {
        if ($request->hasFile('follow_up_letter')) {
            $name = $request->file('follow_up_letter')->getClientOriginalName();
            $follow_up_letter_path = $request->file('follow_up_letter')->storeAs('post-photos', $name);
        }
        if ($request->hasFile('council_decision')) {
            $name = $request->file('council_decision')->getClientOriginalName();
            $council_decision_path = $request->file('council_decision')->storeAs('post-photos', $name);
        }
        if ($request->hasFile('scientific_report')) {
            $name = $request->file('scientific_report')->getClientOriginalName();
            $scientific_report_path = $request->file('scientific_report')->storeAs('post-photos', $name);
        }
        if ($request->hasFile('financial_reporting')) {
            $name = $request->file('financial_reporting')->getClientOriginalName();
            $financial_reporting_path = $request->file('financial_reporting')->storeAs('post-photos', $name);
        }

        FinalReport::create([
            "user_info_id" => $request->user_info_id,
            "order_number" => $request->order_number,
            "follow_up_letter" => $follow_up_letter_path ?? "yo'q",
            "council_decision" => $council_decision_path ?? "yo'q",
            "scientific_report" => $scientific_report_path ?? "yo'q",
            "financial_reporting" => $financial_reporting_path ?? "yo'q",
        ]);

        return redirect()->route('userinfo.index')->with('status', "Ma'lumotlar muvaffaqiyatli qo'shildi.");
    }

    /**
     * Display the specified resource.
     */
    public function show(FinalReport $finalreport)
    {
        return view('admin.finalreport.show', ['finalreport' => $finalreport]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FinalReport $finalreport)
    {
        $userinfos = UserInfo::get();

        return view('admin.finalreport.edit', ['finalreport' => $finalreport, 'userinfos' => $userinfos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorelFinalReportRequest $request, FinalReport $finalreport)
    {
        if ($request->hasFile('follow_up_letter')) {
            $name = $request->file('follow_up_letter')->getClientOriginalName();
            $follow_up_letter_path = $request->file('follow_up_letter')->storeAs('post-photos', $name);
        }
        if ($request->hasFile('council_decision')) {
            $name = $request->file('council_decision')->getClientOriginalName();
            $council_decision_path = $request->file('council_decision')->storeAs('post-photos', $name);
        }
        if ($request->hasFile('scientific_report')) {
            $name = $request->file('scientific_report')->getClientOriginalName();
            $scientific_report_path = $request->file('scientific_report')->storeAs('post-photos', $name);
        }
        if ($request->hasFile('financial_reporting')) {
            $name = $request->file('financial_reporting')->getClientOriginalName();
            $financial_reporting_path = $request->file('financial_reporting')->storeAs('post-photos', $name);
        }
        $finalreport->update([
            "user_info_id" => $request->user_info_id,
            "order_number" => $request->order_number,
            "follow_up_letter" => $follow_up_letter_path ?? "yo'q",
            "council_decision" => $council_decision_path ?? "yo'q",
            "scientific_report" => $scientific_report_path ?? "yo'q",
            "financial_reporting" => $financial_reporting_path ?? "yo'q",
        ]);

        return redirect()->route('userinfo.index')->with('status', "Ma'lumotlar muvaffaqiyatli qo'shildi.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FinalReport $finalreport)
    {

        if(isset($finalreport->follow_up_letter)){
            Storage::delete($finalreport->follow_up_letter);
        }

        if(isset($finalreport->council_decision)){
            Storage::delete($finalreport->council_decision);
        }

        if(isset($finalreport->scientific_report)){
            Storage::delete($finalreport->scientific_report);
        }

        if(isset($finalreport->financial_reporting)){
            Storage::delete($finalreport->financial_reporting);
        }

        $finalreport->delete();

        return redirect()->back()->with('status',"Ma'lumotlar muvaffaqiyatli o'chirildi.");

    }
}
