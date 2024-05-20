<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::paginate(10); // Paginate results for efficiency
        return view('dashboard.admin.brands.index', compact('brands'));
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
        // $request->validate([
        //     'make' => 'required|string|max:255',
        //     'model' => 'required|string|max:255',
        //     'year' => 'required|integer|between:1900,' . date('Y'),
        // ]);
        Brand::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Brand Record Inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('dashboard.admin.brands.specific_view', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('dashboard.admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        // $request->validate([
        //     'make' => 'required',
        //     'model' => 'required',
        //     'year' => 'required|integer|min:1900|max:' . date('Y'),
        // ]);
        $brand->update($request->all());
        return redirect()->route('brands.index')
            ->with('success', 'Brand updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index')
            ->with('success', 'Brand deleted successfully.');
    }
}
