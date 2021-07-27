<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        h6 {
            text-align: center;
            font-size: 20px;
            color: #003366;
            margin: 0px;
        }

        .payment_button_div {
            text-align: center;
        }

        .payment_button {
            padding: 4px;
            background: #003366;
            border-radius: 5px;
            color: white;
            text-decoration: none;
        }

        .order_detail {
            text-align: center;
        }

        .order_detail ul li {
            list-style: none;
            font-size: 14px;
        }

        .order_detail ul li strong {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h6>Hi Hatirpal Admin.{{$order->user->name}} has created a order and waiting for confirmation</h6>
    <div class="order_detail">
        <ul>
            <li><strong>Order id #</strong> {{$order->order_id}}</li>
            <li><strong>Total#</strong> {{$order->total}}</li>
            <li><strong>Address #</strong> {{$order->address->address}}</li>
        </ul>
    </div>
    <div class="payment_button_div">
        <a class="payment_button" href="http://localhost:8000/admin/order/{{$order->slug}}">Check Detail</a>

    </div>
</body>

</html>