<!DOCTYPE html>
<html>
<head>
    <title>Storekeeper</title>
</head>
<body>

    <div>
        <h1>Storekeeper</h1>
        <ul>
            <li><a href="{{ url('/product/create') }}">Add Product</a></li>
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/transactions') }}">Transaction History</a></li>
        </ul>
    </div>

    <div>
        @yield('content')
    </div>

</body>
</html>
