<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of resource.
     */
    public function index()
    {
        return Product::all();
    }
    // Create a new product
    public function store(Request $request){
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    // public function store(Request $request)
    // {
        
    //     $validated = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'paragraph' => 'required|string',
    //         'category' => 'required|string',
    //         'brand' => 'required|string',
    //         'price' => 'required|numeric',
    //         'stock' => 'required|integer',
    //         'rating' => 'required|numeric',
    //         'order' => 'required|integer',
    //         'sales' => 'required|integer',
    //         'photos' => 'required|array',
    //     ]);
    
    //     $product = Product::create($validated);
    //     return response()->json($product, 201);
    // }
    // Show a specific product
    public function show($id) {
        return Product::findOrFail($id);
    }

    // Update a product
    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    // Delete a product
    public function destroy($id) {
        Product::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

    // public function show(Product $product)
    // {
    //     return response()->json($product);
    // }

    // public function update(Request $request, Product $product)
    // {
    //     $product->update($request->all());
    //     return response()->json($product, 200);
    // }

    // public function destroy(Product $product)
    // {
    //     $product->delete();
    //     return response()->json(null, 204);
    // }
    
}
