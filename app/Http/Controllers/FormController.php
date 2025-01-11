<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{
    // Render the form
    public function create()
    {
        // Fetch grandparents from the API
        $response = Http::get('/api/grandparents');

        if ($response->successful()) {
            $grandparents = $response->json(); // Assuming API returns JSON data
        } else {
            $grandparents = [];
        }

        return view('form', compact('grandparents'));
    }

    // Handle form submission
    public function store(Request $request)
    {
        $validated = $request->validate([
            'grandparent_id' => 'required|exists:grandparents,id',
            'name' => 'required|string|max:255',
            'status' => 'nullable|string|max:255',
            'tanggal_lahir' => 'required|date',
            'keterangan' => 'nullable|string',
            'alamat' => 'required|string',
        ]);

        // Send data to the API
        $response = Http::post('127.0.0.1:8001/api/orang', $validated);

        if ($response->successful()) {
            return redirect()->route('form.create')->with('success', 'Person added successfully!');
        }

        return redirect()->route('form.create')->withErrors(['error' => 'Failed to add person.']);
    }
}



