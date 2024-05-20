<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTireRequest;
use App\Http\Requests\UpdateTireRequest;

class TireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tires = Tire::paginate(10); // Paginate results for efficiency
        return view('dashboard.admin.tires.index', compact('tires'));
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
        //     'name' => 'required|string|max:255',
        //     'title' => 'required|string|max:255',
        //     'year' => 'required|integer|between:1900,' . date('Y'),
        // ]);
        Tire::create([
            'name' => $request->name,
            'title' => $request->title,
            'sku' => $request->sku,
            'brand_id' => $request->brand_id,
            'price_id' => $request->price_id,
            'tire_specs_id' => $request->tire_specs_id,
            'discount_id' => $request->discount_id,
            'feature' => $request->feature,
            'inventory' => $request->inventory,
            'in_stock' => $request->in_stock,
            'is_discount' => $request->is_discount,
            'image' => $request->image,
        ]);
        return redirect()->back()->with('success', 'Tire Record Inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tire $tire)
    {
        return view('dashboard.admin.tires.specific_view', compact('tire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tire $tire)
    {
        return view('dashboard.admin.tires.edit', compact('tire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tire $tire)
    {
        // $request->validate([
        //     'make' => 'required',
        //     'model' => 'required',
        //     'year' => 'required|integer|min:1900|max:' . date('Y'),
        // ]);
        $tire->update($request->all());
        return redirect()->route('tires.index')
            ->with('success', 'Tire updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tire $tire)
    {
        $tire->delete();
        return redirect()->route('tires.index')
            ->with('success', 'Tire deleted successfully.');
    }
}
