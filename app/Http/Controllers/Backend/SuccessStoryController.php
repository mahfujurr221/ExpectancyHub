<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SuccessStory;
use Illuminate\Http\Request;

class SuccessStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index
        $data = SuccessStory::all();
        return view('backend.pages.success-stories.index', compact('data'));

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

        try {
            if ($request->hasFile('file_url')) {
                $file = $request->file('file_url');
                $file_name = time() . '_' . $file->getClientOriginalName();
                $file_path = 'uploads/success-stories/';
                $file->move($file_path, $file_name);
                $url = $file_path . $file_name;

            } else {
                $url = null;
            }
            SuccessStory::create([
                'file_url' => $url,
                'status' => $request->status,
            ]);
            toast('Course Category Created Successfully!', 'success');
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
        try {
            $data = SuccessStory::find($id);
            if ($request->hasFile('file_url')) {
                $file = $request->file('file_url');
                $file_name = time() . '_' . $file->getClientOriginalName();
                $file_path = 'uploads/success-stories/';
                $file->move($file_path, $file_name);
                $url = $file_path . $file_name;

            } else {
                $url = $data->file_url;
            }
            $data->update([
                'file_url' => $url,
                'status' => $request->status,
            ]);
            toast('Success Story Updated Successfully!', 'success');
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

        try {
            $data = SuccessStory::find($id);
            //delete file
            if ($data->file_url) {
                unlink($data->file_url);
            }
            $data->delete();
            toast('Success Story Deleted Successfully!', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            toast('Something Went Wrong!', 'error');
        }
    }
}
