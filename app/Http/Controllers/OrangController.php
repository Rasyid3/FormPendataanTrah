<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrangResource;
use App\Models\Orang;
use Illuminate\Http\Request;

class OrangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return OrangResource::collection(Orang::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'grandparent_id' => 'required|exists:grandparents,id',
        'family_data' => 'required|array', // Ensure family data is an array
        'family_data.*.nama' => 'required|string|max:255',
        'family_data.*.status' => 'required|string|max:255',
        'family_data.*.tanggal_lahir' => 'required|date',
        'family_data.*.keterangan' => 'nullable|string|max:255',
        'family_data.*.alamat' => 'required|string|max:255',
    ]);

    $grandparentId = $validated['grandparent_id'];
    $familyData = array_map(function ($item) use ($grandparentId) {
        $item['grandparent_id'] = $grandparentId; // Add grandparent_id to each row
        return $item;
    }, $validated['family_data']);

    // Insert all family rows in one operation
    Orang::insert($familyData);
    return view ('form.thankyou');
    return response()->json(['message' => 'Family data added successfully'], 201);

}


    /**
     * Display the specified resource.
     */
    public function show(Orang $orang)
    {
        return new OrangResource($orang);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orang $orang)
    {
        $validated = $request->validate([
            'grandparent_id' => 'required|exists:grandparents,id',
            'nama' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'keterangan' => 'nullable|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        $orang->update($validated);
        return new OrangResource($orang);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orang $orang)
    {
        $orang->delete();
        return response()->json(['message' => 'deleted'], 200);
    }
}
