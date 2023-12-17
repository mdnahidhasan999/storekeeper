<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createForm()
    {
        return view('product.create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Product::create($request->all());

        return redirect()->route('product.create.form')->with('success', 'Product added successfully');
    }
}
