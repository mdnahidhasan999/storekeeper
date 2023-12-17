@extends('layouts.app')

@section('content')
    <form method="post" action="{{ url('/product/create') }}">
        @csrf
        <label for="name">Product Name</label>
        <input type="text" name="name" required>
        <br>
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" required>
        <br>
        <label for="price">Price</label>
        <input type="number" step="0.01" name="price" required>
        <br>
        <button type="submit">Add Product</button>
    </form>
@endsection
