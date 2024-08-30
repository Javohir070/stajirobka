<?php

namespace App\Http\Controllers;

use App\Imports\ScienceEmport;
use App\Models\Science;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ScienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sciences = Science::latest()->paginate(20);
        
        return view('admin.science.index', ['sciences' => $sciences]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.science.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Science::create([
            'name' => $request->name
        ]);

        return redirect()->route('science.index')->with('status',"Ma'lumotlar muvaffaqiyatli qo'shildi.");

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
    public function edit(Science $science)
    {
        return view('admin.science.edit', ['science' => $science]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Science $science)
    {
        $science->update([
            'name' => $request->name
        ]);

        return redirect()->route('science.index')->with('status',"Ma'lumotlar muvaffaqiyatli yangilandi.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Science $science)
    {
        $science->delete();

        return redirect()->back();
    }

    public function science_import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);
        
        Excel::import(new ScienceEmport, $request->file('file'));
        
        return redirect()->back()->with('status', 'Xodimlar muvaffaqiyatli yuklandi!');
    }
}
