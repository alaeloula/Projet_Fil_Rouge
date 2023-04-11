<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf</title>
</head>

<body>
    <h1>Order Details</h1>
    Customer Name :<h3> {{$order->user->name}} </h3>
    Customer Email :<h3>{{$order->user->email}}</h3>
    Customer ID :<h3>{{$order->user->id}}</h3>


    Product Title :<h3>{{$order->product->title}}</h3>
    Product Quantite :<h3>{{$order->quantite}}</h3>
    Product Price :<h3>{{$order->product->price}}</h3>
    Price A Payer:<h3>{{$order->quantite * $order->product->price}}</h3>
    Payement Status  :<h3>{{$order->payement_status}}</h3>
    Product id  :<h3>{{$order->product->id}}</h3>
    <br><br>
    <!-- <img src="/pd/{{$order->product->image}}" alt="" srcset=""> -->
</body>

</html>