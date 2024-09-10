<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function products()
    {
        $products = Product::all();
        return response()->json($products);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function createproduct(Request $request)
    {

        $product = new Product;
 
        $product->name = $request->name;
        $product->detail = $request->detail;
 
        $product->save();

        return response()->json($product);
    }
}
