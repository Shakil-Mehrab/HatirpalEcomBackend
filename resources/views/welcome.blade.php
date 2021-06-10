<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div class="row">
    <div class="com-md-12">
        @forelse($products as $product)
        <div>
        {{$product->name}}-Price({{$product->price}})
        <a href="{{url('product/show/'.$product->id)}}"></a>
        </div>
        @empty
        @endforelse
    </div>
    </div>
</body>
</html>