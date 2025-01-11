<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(People::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'grandparent_id' => 'required|exists:grandparents,id',
            'name' => 'required|string|max:255',
            'status' => 'nullable|string|max:255',
            'tanggal_lahir' => 'required|date',
            'keterangan' => 'nullable|string',
            'alamat' => 'nullable|string',
        ]);

        $people = People::create($validated);
        return response()->json($people, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(People $people)
    {
        return response()->json($people, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, People $people)
    {
        $validated = $request->validate([
            'grandparent_id' => 'required|exists:grandparents,id',
            'name' => 'required|string|max:255',
            'status' => 'nullable|string|max:255',
            'tanggal_lahir' => 'required|date',
            'keterangan' => 'nullable|string',
            'alamat' => 'nullable|string',
        ]);

        $people->update($validated);
        return response()->json($people, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Id $id)
    {
        $people->delete();
        return response()->json(['message' => 'deleted'], 200);
    }

}
