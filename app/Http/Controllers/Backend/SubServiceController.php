<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\SubService;
use Illuminate\Http\Request;

class SubServiceController extends Controller
{
    public function index()
    {
        $subservices = SubService::with('service')->latest()->get();
        return view('backend.pages.sub-service.index', compact('subservices'));
    }

    public function create()
    {
        $services = Service::all();
        return view('backend.pages.sub-service.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/subservices/'), $filename);
            $imagePath = 'uploads/subservices/' . $filename;
        }

        SubService::create([
            'service_id' => $request->service_id,
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        toast('Sub-Service Created Successfully!', 'success');
        return redirect()->route('sub-services.index');
    }

    public function edit(SubService $subservice)
    {
        $services = Service::all();
        return view('backend.pages.sub-service.edit', compact('subservice', 'services'));
    }

    public function update(Request $request, SubService $sub_service)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
        ]);

        $imagePath = $sub_service->image;
        if ($request->hasFile('image')) {
            if ($imagePath && file_exists(public_path($imagePath))) {
                unlink(public_path($imagePath));
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/subservices/'), $filename);
            $imagePath = 'uploads/subservices/' . $filename;
        }

        $sub_service->update([
            'service_id' => $request->service_id,
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        toast('Sub-Service Updated Successfully!', 'success');
        return redirect()->route('sub-services.index');
    }

    public function destroy(SubService $sub_service)
    {
        if ($sub_service->image && file_exists(public_path($sub_service->image))) {
            unlink(public_path($sub_service->image));
        }
        $sub_service->delete();
        toast('Sub-Service Deleted!', 'success');
        return redirect()->route('sub-services.index');
    }
}
