<?php

namespace App\Http\Controllers;

use App\Models\WeightEntries;
use Illuminate\Http\Request;

class WeightEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = WeightEntries::all();
        return response()->json($collection);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $weightEntries = new WeightEntries;
        $weightEntries->value = $request->weight;
        $weightEntries->register_date = $request->register_date;
        $weightEntries->user = 'Mario';
        $weightEntries->save();
        return response()->json([
            "message" => "Weight entry added",
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WeightEntries $weightEntries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WeightEntries $weightEntries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WeightEntries $weightEntries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WeightEntries $weightEntries)
    {
        //
    }
}
