<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createProduct(Request $request){
         $request->validate([
        "product_name"        => "required|string|max:255",
        "product_price"       => "required|integer",
        "product_description" => "required|string",
        "quantity"  => "required|integer",
    ]);

    $product_name        = $request->input("product_name");
    $product_price       = $request->input("product_price");
    $product_description = $request->input("product_description");
    $quantity_available  = $request->input("quantity");

    $createProduct=Product::create([
        "product_name" => $product_name,
        "product_price" => $product_price,
        "product_description" => $product_description,
        "quantity_available" => $quantity_available
    ]);
    if ($createProduct) {
        return response()->json(['response' => "Product created successfully"]);
    }

    return response()->json(['response' => "Error creating product"], 500);

    }

    public function showProducts(){
    $allProducts =   Product::get();
    return response()->json(['response' => $allProducts]);
    }
}
