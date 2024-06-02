<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liver; // Correct casing for the model namespace

class LiverController extends Controller
{
    public function index()
    {
        return Liver::all();
    }

    // Create a new liver
    public function store(Request $request)
    {
        return Liver::create($request->all());
    }

    // Get a single liver
    public function show($id)
    {
        return Liver::findOrFail($id);
    }

    // Update a liver
    public function update(Request $request, $id)
    {
        $liver = Liver::findOrFail($id);
        $liver->update($request->all());

        return $liver;
    }

    // Delete a liver
    public function destroy($id)
    {
        $liver = Liver::findOrFail($id);
        $liver->delete();

        return response(null, 204); // HTTP 204 No Content
    }
}
