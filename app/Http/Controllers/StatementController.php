<?php

namespace App\Http\Controllers;

use App\Models\Statement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StatementController extends Controller
{
    public function index()
    {
        // $statements = Statement::paginate(20);
        $statements = Statement::where('type',1)->count();
        $statements1 = Statement::where('type',2)->count();


        return view('admin.itm', ['statements' => $statements,'statements1'=> $statements1]);
    }

    public function bayon($type)
    {
        $statements = Statement::where('type',$type)->paginate(20);
        return view('admin.statement.bayon', ['statements'=> $statements]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.statement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $file_path = $request->file('file')->storeAs('post-photos', $name);
        }
        if ($request->hasFile('file1')) {
            $name = $request->file('file1')->getClientOriginalName();
            $file1_path = $request->file('file1')->storeAs('post-photos', $name);
        }

        Statement::create([
            "type" => $request->type,
            "text" => $request->text,
            "file" => $file_path ?? "yo'q",
            "file1" => $file1_path ?? "yo'q",
        ]);

        return redirect()->route('statement.index')->with('status', "Ma'lumotlar muvaffaqiyatli qo'shildi.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Statement $statement)
    {
        return view('admin.statement.show', ['statement' => $statement]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statement $statement)
    {

        return view('admin.statement.edit', ['statement' => $statement,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Statement $statement)
    {
        if ($request->hasFile('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $file_path = $request->file('file')->storeAs('post-photos', $name);
        }
        if ($request->hasFile('file1')) {
            $name = $request->file('file1')->getClientOriginalName();
            $file1_path = $request->file('file1')->storeAs('post-photos', $name);
        }

        $statement->update([
            "type" => $request->type,
            "text" => $request->text,

            "file" => $file_path ?? "yo'q",
            "file1" => $file1_path ?? "yo'q",
        ]);

        return redirect()->route('statement.index')->with('status', "Ma'lumotlar muvaffaqiyatli qo'shildi.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statement $statement)
    {

        if(isset($statement->file)){
            Storage::delete($statement->file);
        }

        if(isset($statement->file1)){
            Storage::delete($statement->file1);
        }

        $statement->delete();

        return redirect()->back()->with('status',"Ma'lumotlar muvaffaqiyatli o'chirildi.");

    }
}
