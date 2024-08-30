<?php

namespace App\Http\Controllers;

use App\Imports\StateEmport;
use App\Models\State;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = State::latest()->paginate(20);

        return view('admin.state.index', ['states' => $states]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.state.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        State::create([
            'name' => $request->name
        ]);

        return redirect()->route('state.index')->with('status',"Ma'lumotlar muvaffaqiyatli qo'shildi.");

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
    public function edit(State $state)
    {
        return view('admin.state.edit', ['state' => $state]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, State $state)
    {
        $state->update([
            'name' => $request->name
        ]);

        return redirect()->route('state.index')->with('status',"Ma'lumotlar muvaffaqiyatli yangilandi.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $state)
    {
        $state->delete();

        return redirect()->back();
    }


    public function state_import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);


        Excel::import(new StateEmport, $request->file('file'));

        return redirect()->back()->with('status', 'Xodimlar muvaffaqiyatli yuklandi!');
        
    }
}
