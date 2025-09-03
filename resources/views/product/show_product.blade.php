<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
    <style>
      .product-card{
        display:inline-block;
        background:grey;
        border-radius:5px;
        padding:5px 5px;
        margin-left:10px;
        color:white;
      }
    </style>
</head>
<body>
    @foreach($products as $product)
    <div class='product-card'>

    <p><span style="margin-right:10px;"><b>Product name:</b></span>{{$product['product_name']}}</p>
    <p><span style="margin-right:10px;"><b>Product price:</b></span>{{$product['product_price']}}</p>
    <p><span style="margin-right:10px;"><b>Product description:</b></span>{{$product['product_description']}}</p>
    </div>
    @endforeach
</body>
</html>
