<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row">
    <div class="col-md-12">
    <form action="{{url('/cart')}}" method="post">
    @csrf
    {{$product->name}}-
    {{$product->price}}
    <input type="text" name="id" value="{{$product->id}}">
    <input type="text" name="quantity" value="1">
    <input type="submit" value="Add to Cart">
    </form>
    </div>
    </div>
</body>
</html>