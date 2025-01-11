<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Grandparent;
use Illuminate\Http\Request;

class GrandparentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Grandparent::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'asal' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
        ]);

        $grandparent = Grandparent::create($validated);
        return response()->json($grandparent, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Grandparent $grandparent)
    {
        return response()->json($grandparent, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grandparent $grandparent)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'asal' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
        ]);

        $grandparent->update($validated);
        return response()->json($grandparent, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grandparent $grandparent)
    {
        $grandparent->delete();
        return response()->json(['message' => 'deleted'], 200);
    }

}
