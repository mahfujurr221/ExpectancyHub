<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $data = Owner::first();
        return view('backend.pages.owner.index', compact('data'));
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $about = Owner::first();
        if ($about) {
            $request->validate([
                'name' => 'required',
                'designation' => 'required',

            ]);

            if ($request->hasFile('file_url')) {
                $file = $request->file('file_url');

                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/owner/'), $fileName);
                $url = 'uploads/owner/' . $fileName;
            } else {
                $url = $about->file_url;
            }
            $input = array_merge($request->all(), ['file_url' => $url]);
            $about->update($input);
        } else {
            $request->validate([
                'name' => 'required',
                'designation' => 'required',

            ]);

            if ($request->hasFile('file_url')) {
                $file = $request->file('file_url');

                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/owner/'), $fileName);
                $url = 'uploads/owner/' . $fileName;
            }else{
                $url = null;
            }
            $input = array_merge($request->all(), ['file_url' => $url]);
            Owner::create($input);
        }

        return back()->with('success', 'About me updated successfully');
    }
}
