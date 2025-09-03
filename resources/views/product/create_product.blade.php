<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>
    <form action="{{ route('api/createProduct') }}" method="POST">
        @csrf
        <input type="text" name="product_name" placeholder="name of item e.g Milk" required />
        <input type="text" name="product_description" placeholder="product description e.g a Litre of Milk" required />
        <input type="text" name="quantity" placeholder="quantity e.g 5, 6" required />
        <input type="text" name="product_price" placeholder="e.g 500, 1000, 10500.20" required />
        <button type="submit">Create Product</button>
    </form>

    @if(!empty($response))
        <div>
            <p>{{ $response }}</p>
        </div>
    @else
        <div>
            <p>No response found yet</p>
        </div>
    @endif
</body>
</html>
