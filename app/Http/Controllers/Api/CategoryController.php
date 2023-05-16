<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return response()->json([
            'status' => 'success',
            'data' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
        ]);

        $category = new Category;
        $category->name = $validatedData['name'];
        $category->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Categoria creada con exito',
            'data' => $category,
        ]);
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data' => $category,
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
        ]);

        $category->name = $validatedData['name'];
        $category->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Categoria actualizada con exito',
            'data' => $category,
        ]);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Categoria eliminada con exito',
        ]);
    }
}
