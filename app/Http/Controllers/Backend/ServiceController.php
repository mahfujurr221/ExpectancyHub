<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('backend.pages.service.index', compact('services'));
    }

    // Show create form
    public function create()
    {
        return view('backend.pages.service.create');
    }

    // Store new service
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/services/'), $fileName);
            $imagePath = 'uploads/services/' . $fileName;
        }

        Service::create([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        toast('Service Created Successfully!', 'success');
        return redirect()->route('services.index');
    }

    // Show edit form
    public function edit(Service $service)
    {
        return view('backend.pages.service.edit', compact('service'));
    }

    // Update existing service
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
        ]);

        $imagePath = $service->image;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($service->image && file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/services/'), $fileName);
            $imagePath = 'uploads/services/' . $fileName;
        }

        $service->update([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        toast('Service Updated Successfully!', 'success');
        return redirect()->route('services.index');
    }

    // Delete service
    public function destroy(Service $service)
    {
        if ($service->image && file_exists(public_path($service->image))) {
            unlink(public_path($service->image));
        }

        $service->delete();

        toast('Service Deleted Successfully!', 'success');
        return redirect()->route('services.index');
    }
}
