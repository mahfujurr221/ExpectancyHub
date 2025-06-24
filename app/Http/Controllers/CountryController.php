<?php

namespace App\Http\Controllers;

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
            $flagPath = $request->file('flag')->store('flags', 'public');
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

        if ($request->hasFile('flag')) {
            $flagPath = $request->file('flag')->store('flags', 'public');
            $country->flag = $flagPath;
        }

        $country->update([
            'name' => $request->name,
            'code' => $request->code,
            'description' => $request->description,
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
