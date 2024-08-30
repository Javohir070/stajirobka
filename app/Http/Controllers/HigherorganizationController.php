<?php

namespace App\Http\Controllers;

use App\Imports\HigherorganizationEmport;
use App\Models\Higherorganization;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HigherorganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $higherorganizations = Higherorganization::latest()->paginate(20);

        return view('admin.higherorganization.index',['higherorganizations' => $higherorganizations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.higherorganization.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Higherorganization::create([
            'name' => $request->name
        ]);

        return redirect()->route('higherorganization.index')->with('status',"Ma'lumotlar muvaffaqiyatli qo'shildi.");

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
    public function edit(Higherorganization $higherorganization)
    {
        return view('admin.higherorganization.edit', ['higherorganization' => $higherorganization]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Higherorganization $higherorganization)
    {
        $higherorganization->update([
            'name' => $request->name
        ]);

        return redirect()->route('higherorganization.index')->with('status',"Ma'lumotlar muvaffaqiyatli yangilandi.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Higherorganization $higherorganization)
    {
        $higherorganization->delete();

        return redirect()->back();
    }


    public function higherorganization_import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        Excel::import(new HigherorganizationEmport, $request->file('file'));

        return redirect()->back()->with('status', 'Xodimlar muvaffaqiyatli yuklandi!');
    }
}
