<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function show($id)
    {
        return Category::find($id);
    }

    public function store(Request $request)
    {
        return Category::create($request->all());
    }

    public function update(Request $request,$id)
    {
        $category = Category::find($id);

        $category->update($request->all());

        return $category;
    }

    public function destroy($id)
    {
        Category::destroy($id);

        return response()->json([
            'message'=>'Deleted Successfully'
        ]);
    }
}
