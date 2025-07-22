<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    // Display list
    public function index(Request $request)
    {
        $query = Country::query();

        if ($request->filled('title')) {
            $query->where('name', 'like', '%' . $request->title . '%');
        }

        $countries = $query->latest()->get();

        return view('backend.pages.country.index', compact('countries'));
    }

    // Show create form
    public function create()
    {
        return view('backend.pages.country.create');
    }

    // Store country
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:countries,code',
            'description' => 'nullable|string',
            'flag' => 'nullable|image|max:2048',
        ]);

        $flagPath = null;

        if ($request->hasFile('flag')) {
            $file = $request->file('flag');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/countries/'), $fileName);
            $flagPath = 'uploads/countries/' . $fileName;
        }

        Country::create([
            'name' => $request->name,
            'code' => $request->code,
            'description' => $request->description,
            'flag' => $flagPath,
        ]);

        toast('Country Created Successfully!', 'success');
        return redirect()->route('countries.index');
    }

    // Show edit form
    public function edit(Country $country)
    {
        return view('backend.pages.country.edit', compact('country'));
    }

    // Update country
    public function update(Request $request, Country $country)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:countries,code,' . $country->id,
            'description' => 'nullable|string',
            'flag' => 'nullable|image|max:2048',
        ]);

        $flagPath = $country->flag;

        if ($request->hasFile('flag')) {
            // Delete the old flag if it exists
            if ($country->flag && file_exists(public_path($country->flag))) {
                unlink(public_path($country->flag));
            }

            $file = $request->file('flag');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/countries/'), $fileName);
            $flagPath = 'uploads/countries/' . $fileName;
        }

        $country->update([
            'name' => $request->name,
            'code' => $request->code,
            'description' => $request->description,
            'flag' => $flagPath,
        ]);

        toast('Country Updated Successfully!', 'success');
        return redirect()->route('countries.index');
    }


    // Delete country
    public function destroy(Country $country)
    {
        $country->delete();
        toast('Country Deleted Successfully!', 'success');
        return redirect()->route('countries.index');
    }
}
