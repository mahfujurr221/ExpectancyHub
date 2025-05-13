<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $branches = Branch::query();
        if ($request->name) {
            $branches = $branches->where('name', 'like', '%' . $request->name . '%');
        }
        $branches = $branches->latest()->paginate(20);
        return view('backend.pages.branch.index', compact('branches'));
    }

    //create
    public function create()
    {
        return view('backend.pages.branch.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required| unique:branches|string|max:255',
            'phone' => 'required|unique:branches|string|max:15',
            'email' => 'required|email|unique:branches',
            'address' => 'required|string|max:255',
        ]);
        Branch::create($validated + ['map' => $request->map]);
        toast('Branch created successfully!', 'success');
        return redirect()->route('branches.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        return view('backend.pages.branch.edit', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branch $branch)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|unique:branches,name,' . $branch->id . '|string|max:255',
            'phone' => 'required|unique:branches,phone,' . $branch->id . '|string|max:15',
            'email' => 'required|email|unique:branches,email,' . $branch->id,
            'address' => 'required|string|max:255',
        ]);
        $branch->update($validated + ['map' => $request->map]);
        toast('Branch updated successfully!', 'success');
        return redirect()->route('branches.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        toast('Branch deleted successfully!', 'success');
        return back();
    }
}
