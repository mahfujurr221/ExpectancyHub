<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:list-banner')->only('index');
        $this->middleware('can:create-banner')->only('store');
        $this->middleware('can:edit-banner')->only('update');
        $this->middleware('can:delete-banner')->only('destroy');
    }

    public function index()
    {
        $banners = Banner::latest()->get();
        return view('backend.pages.banner.index', compact('banners'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'title' => 'required',
            'small_title' => 'required',
        ]);

        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $fileName = time() . '.' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/banner/'), $fileName);
            $validated['image_url'] = 'uploads/banner/' . $fileName;
        }
        // dd($validated);

        $banner = Banner::create($validated + [
            'btnText' => $request->btnText,
            'btnUrl' => $request->btnUrl,
            'videoText' => $request->videoText,
            'videoUrl' => $request->videoUrl,
        ]);

        if ($banner) {
            toast('Banner Created Successfully!', 'success');
            return redirect()->route('banners.index');
        } else {
            toast('Banner Created Failed!', 'error');
            return redirect()->route('banners.index');
        }
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'small_title' => 'required',
        ]);

        $banner = Banner::findOrFail($id);

        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            if (file_exists($banner->image_url)) {
                unlink($banner->image_url);
            }
            $fileName = time() . '.' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/banner/'), $fileName);
            $validated['image_url'] = 'uploads/banner/' . $fileName;
        }

        $banner->update($validated + [
            'btnText' => $request->btnText,
            'btnUrl' => $request->btnUrl,
            'videoText' => $request->videoText,
            'videoUrl' => $request->videoUrl,
            'image_url' => $validated['image_url'] ?? $banner->image_url,
        ]);

        if ($banner) {
            toast('Banner Updated Successfully!', 'success');
            return redirect()->route('banners.index');
        } else {
            toast('Banner Updated Failed!', 'error');
            return redirect()->route('banners.index');
        }

    }

    public function destroy(string $id)
    {
        //
    }
}
