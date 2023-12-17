@extends('layouts.app')

@section('content')
    <h2>Sales Dashboard</h2>

    <div class="card">
        <h3>Today's Sales</h3>
        <p>Total Sales: ${{ $salesFigures['today'] }}</p>
    </div>

    <div class="card">
        <h3>Yesterday's Sales</h3>
        <p>Total Sales: ${{ $salesFigures['yesterday'] }}</p>
    </div>

    <div class="card">
        <h3>This Month's Sales</h3>
        <p>Total Sales: ${{ $salesFigures['this_month'] }}</p>
    </div>

    <div class="card">
        <h3>Last Month's Sales</h3>
        <p>Total Sales: ${{ $salesFigures['last_month'] }}</p>
    </div>
@endsection
