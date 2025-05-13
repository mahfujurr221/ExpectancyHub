<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Headline;
use Illuminate\Http\Request;

class HeadlineController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index
        $headlines = Headline::orderBy('id', 'desc')->get();
        return view('backend.pages.headline.index', compact('headlines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store
        $request->validate([
            'name' => 'required',
        ]);
        try {
            Headline::create([
                'name' => $request->name,
                'status' => $request->status,

            ]);
            toast('Headline Created Successfully!', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            toast('Something Went Wrong!', 'error');
        }
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update
        $request->validate([
            'name' => 'required',
        ]);
        try {
            Headline::find($id)->update([
                'name' => $request->name,
                'status' => $request->status,
            ]);
            toast('Headline Updated Successfully!', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            toast('Something Went Wrong!', 'error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //destroy
        try {
            Headline::find($id)->delete();
            toast('Headline Deleted Successfully!', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            toast('Something Went Wrong!', 'error');
        }

    }
}

