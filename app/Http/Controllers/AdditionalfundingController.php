<?php

namespace App\Http\Controllers;

use App\Models\Additionalfunding;
use App\Http\Requests\StoreAdditionalfundingRequest;
use App\Http\Requests\UpdateAdditionalfundingRequest;
use App\Models\UserInfo;

class AdditionalfundingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $additionalfundings = Additionalfunding::latest()->paginate(20);

        return view('admin.additionalfunding.index', [ 'additionalfundings' => $additionalfundings ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userinfos = UserInfo::all();
        return view('admin.additionalfunding.create', ['userinfos'=>$userinfos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdditionalfundingRequest $request)
    {
        
        Additionalfunding::create([
            "user_info_id" =>  $request->user_info_id,
            "order_number" =>  $request->order_number,
            "additional_amount" =>  $request->additional_amount,
            "additional_charge_number" =>  $request->additional_charge_number,
            "additional_date" =>  $request->additional_date,
            "total_funding" =>  $request->total_funding,
            "report_letter_number" =>  $request->report_letter_number,
            "report_letter_date" =>  $request->report_letter_date,
            "money_saved_sum" =>  $request->money_saved_sum,
            "money_saved_boshqa" =>  $request->money_saved_boshqa,
            "refund_amount" =>  $request->refund_amount,
            "returned_currency" =>  $request->returned_currency,
            "return_date" =>  $request->return_date,
            "additional_refund_amount" =>  $request->additional_refund_amount,
            "additional_returned_currency" =>  $request->additional_returned_currency,
            "additional_refund_date" =>  $request->additional_refund_date,
            "additional_refund_total" =>  $request->additional_refund_total,
            "total_payment" =>  $request->total_payment,
        ]);

        return redirect()->route('additionalfunding.index')->with('status',"Ma'lumotlar muvaffaqiyatli qo'shildi.");

    }

    /**
     * Display the specified resource.
     */
    public function show(Additionalfunding $additionalfunding)
    {
        return view('admin.additionalfunding.show',['additionalfunding'=>$additionalfunding]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Additionalfunding $additionalfunding)
    {
        $userinfos = UserInfo::all();

        return view('admin.additionalfunding.edit', ['userinfos'=> $userinfos , 'additionalfunding'=>$additionalfunding]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAdditionalfundingRequest $request, Additionalfunding $additionalfunding)
    {
        $additionalfunding->update([]);

        return redirect()->route('additionalfunding.index')->with('status',"Ma'lumotlar muvaffaqiyatli yangilandi.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Additionalfunding $additionalfunding)
    {
        $additionalfunding->delete();

        return redirect()->route('additionalfunding.index')->with('status',"Ma'lumotlar muvaffaqiyatli o'chirildi.");

    }
}
