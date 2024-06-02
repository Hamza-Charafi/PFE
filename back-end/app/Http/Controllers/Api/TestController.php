<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Liver;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index()
    {
        return Liver::all();
    }

    public function store(Request $request)
    {
        // Log incoming request data for debugging
        Log::info('Incoming request data:', $request->all());
    
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'pages' => 'required|integer',
            ]);
    
            // Log validated data for debugging
            Log::info('Validated data:', $validatedData);
    
            $liver = Liver::create($validatedData);
    
            // Log created liver data
            Log::info('Liver created successfully:', ['liver' => $liver]);
    
            return response()->json($liver, 201);
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            Log::error('Error creating liver:', ['message' => $e->getMessage(), 'stack' => $e->getTraceAsString()]);
    
            // Return a meaningful error response
            return response()->json(['error' => 'An unexpected error occurred'], 500);
        }
    }
    

    public function show($id)
    {
        return Liver::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $liver = Liver::findOrFail($id);
        $liver->update($request->all());

        return $liver;
    }

    public function destroy($id)
    {
        $liver = Liver::findOrFail($id);
        $liver->delete();

        return response(null, 204);
    }
}
