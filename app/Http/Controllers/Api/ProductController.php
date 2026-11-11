<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function store(Request $request)
    {
        $product = Product::create(
            $request->all()
        );

        return response()->json($product);
    }

    public function update(Request $request,$id)
    {
        $product = Product::find($id);

        $product->update(
            $request->all()
        );

        return response()->json($product);
    }

    public function destroy($id)
    {
        Product::destroy($id);

        return response()->json([
            'message'=>'Deleted Successfully'
        ]);
    }
}
