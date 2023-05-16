<?php

namespace App\Http\Controllers\Api;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::all();

        return response()->json([
            'status' => 'success',
            'data' => $regions,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
        ]);

        $region = new Region;
        $region->name = $validatedData['name'];
        $region->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Region creada con exito',
            'data' => $region,
        ]);
    }

    public function show($id)
    {
        $region = Region::findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data' => $region,
        ]);
    }

    public function update(Request $request, Region $region)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
        ]);

        $region->name = $validatedData['name'];
        $region->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Region actualizada con exito',
            'data' => $region,
        ]);
    }

    public function destroy(Region $region)
    {
        $region->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Region eliminada con exito',
        ]);
    }
}
