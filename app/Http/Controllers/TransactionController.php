<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Product::orderBy('created_at', 'desc')->get();
        return view('transaction.index', compact('transactions'));
    }
}
