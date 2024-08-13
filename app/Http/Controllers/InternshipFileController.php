<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelInternshipFileRequest;
use App\Models\InternshipFile;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class InternshipFileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internshipfiles = InternshipFile::paginate(20);

        return view('admin.internshipfile.index',['internshipfiles'=>$internshipfiles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userinfos = UserInfo::get();

        return view('admin.internshipfile.create',['userinfos'=>$userinfos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorelInternshipFileRequest $request)
    {
        if($request->hasFile('follow_up_letter')){
            $name = $request->file('follow_up_letter')->getClientOriginalName();
            $follow_up_letter_path = $request->file('follow_up_letter')->storeAs('post-photos', $name);
        }
        if($request->hasFile('council_decision')){
            $name = $request->file('council_decision')->getClientOriginalName();
            $council_decision_path = $request->file('council_decision')->storeAs('post-photos', $name);
        }
        if($request->hasFile('scientific_report')){
            $name = $request->file('scientific_report')->getClientOriginalName();
            $scientific_report_path = $request->file('scientific_report')->storeAs('post-photos', $name);
        }
        if($request->hasFile('financial_reporting')){
            $name = $request->file('financial_reporting')->getClientOriginalName();
            $financial_reporting_path = $request->file('financial_reporting')->storeAs('post-photos', $name);
        }

        InternshipFile::create([
            "user_info_id" => $request->user_info_id, 
            "order_period" => $request->order_period, 
            "tracking_decision_number" => $request->tracking_decision_number,
            "tracking_decision_date" => $request->tracking_decision_date, 
            "special_expert_number" => $request->special_expert_number, 
            "special_expert_date" => $request->special_expert_date,
            "agency_order_number" => $request->agency_order_number,
            "agency_order_date" => $request->agency_order_date, 
            "contract_number" => $request->contract_number,
            "contract_date" => $request->contract_date,
            "amount" => $request->amount,
            "payment_number" => $request->payment_number,
            "date" => $request->date,
            "total_funding_amount" => $request->total_funding_amount,
            "financial_letter_number" => $request->financial_letter_number, 
            "financial_letter_date" => $request->financial_letter_date,
            "scientific_letter_number" => $request->scientific_letter_number,
            "scientific_letter_date" => $request->scientific_letter_date,
            "money_saved" => $request->money_saved,
            "total_payment" => $request->total_payment,
            "sxplanation" => $request->sxplanation, 
            "follow_up_letter" => $follow_up_letter_path ?? "yo'q",
            "council_decision" => $council_decision_path ?? "yo'q",
            "scientific_report" => $scientific_report_path ?? "yo'q",
            "financial_reporting" => $financial_reporting_path ?? "yo'q",
        ]);

        return redirect()->route('internshipfile.index')->with('status', "Ma'lumotlar muvaffaqiyatli qo'shildi.");
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
    public function edit(InternshipFile $internshipfile)
    {
        $userinfos = UserInfo::get();

        return view('admin.internshipfile.edit',['internshipfile'=>$internshipfile, 'userinfos'=>$userinfos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorelInternshipFileRequest $request, InternshipFile $internshipfile)
    {
        if($request->hasFile('follow_up_letter')){
            $name = $request->file('follow_up_letter')->getClientOriginalName();
            $follow_up_letter_path = $request->file('follow_up_letter')->storeAs('post-photos', $name);
        }
        if($request->hasFile('council_decision')){
            $name = $request->file('council_decision')->getClientOriginalName();
            $council_decision_path = $request->file('council_decision')->storeAs('post-photos', $name);
        }
        if($request->hasFile('scientific_report')){
            $name = $request->file('scientific_report')->getClientOriginalName();
            $scientific_report_path = $request->file('scientific_report')->storeAs('post-photos', $name);
        }
        if($request->hasFile('financial_reporting')){
            $name = $request->file('financial_reporting')->getClientOriginalName();
            $financial_reporting_path = $request->file('financial_reporting')->storeAs('post-photos', $name);
        }
        $internshipfile->update([
            "user_info_id" => $request->user_info_id, 
            "order_period" => $request->order_period, 
            "tracking_decision_number" => $request->tracking_decision_number,
            "tracking_decision_date" => $request->tracking_decision_date, 
            "special_expert_number" => $request->special_expert_number, 
            "special_expert_date" => $request->special_expert_date,
            "agency_order_number" => $request->agency_order_number,
            "agency_order_date" => $request->agency_order_date, 
            "contract_number" => $request->contract_number,
            "contract_date" => $request->contract_date,
            "amount" => $request->amount,
            "payment_number" => $request->payment_number,
            "date" => $request->date,
            "total_funding_amount" => $request->total_funding_amount,
            "financial_letter_number" => $request->financial_letter_number, 
            "financial_letter_date" => $request->financial_letter_date,
            "scientific_letter_number" => $request->scientific_letter_number,
            "scientific_letter_date" => $request->scientific_letter_date,
            "money_saved" => $request->money_saved,
            "total_payment" => $request->total_payment,
            "sxplanation" => $request->sxplanation, 
            "follow_up_letter" => $follow_up_letter_path ?? "yo'q",
            "council_decision" => $council_decision_path ?? "yo'q",
            "scientific_report" => $scientific_report_path ?? "yo'q",
            "financial_reporting" => $financial_reporting_path ?? "yo'q",
        ]);

        return redirect()->route('internshipfile.index')->with('status', "Ma'lumotlar muvaffaqiyatli qo'shildi.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
