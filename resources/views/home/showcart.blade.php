<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('home/css/bootstrap.custom.min.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/style.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{asset('home/css/listing.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('home/css/custom.css')}}" rel="stylesheet">


    

    <style>
        .img_size {
            height: 50px;
            width: 50px;
        }

        .total {
            font-size: 20px;
        }
    </style>
</head>

<body>

    <div id="page" class="theia-exception">

        @include('home.header')
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
        </div>
        @endif

        <div>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Product title</th>
                        <th>Product Quantity</th>
                        <th>Price </th>
                        <th>image</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $totalePrice = 0 ?>
                    @foreach($products_cart as $pd)
                    <tr>
                        <td>{{$pd->title}}</td>
                        <td>{{$pd->pivot->quantite}}</td>
                        <td>{{$pd->price*$pd->pivot->quantite}}</td>
                        <td><img src="/pd/{{$pd->image}}" alt="" srcset="" class="img_size"></td>


                       
                        <td>
                            <a href="{{url('remove_cart',$pd->pivot->id)}}" class="btn btn-primary">supp</a>
                        </td>
                       
                    </tr>
                    <?php $totalePrice += $pd->price*$pd->pivot->quantite ?>
                    @endforeach
                </tbody>
            </table>
            <center>
                <h1 class="total">Total Price : {{$totalePrice}}</h1>
            </center>
            <div>
                <h1 style="font-size: 25px; padding-bottom: 15 px;">
                    Proceed To Order
                </h1>
                <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On Delivery</a>
                <a href="{{url('stripe',$totalePrice)}}" class="btn btn-danger">Pay Using Card</a>
            </div>

        </div>


        <!--/footer-->
    </div>
    @include('home.footer')
    <!-- page -->

    <div id="toTop"></div><!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="home/js/common_scripts.min.js"></script>
    <script src="home/js/main.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="home/js/sticky_sidebar.min.js"></script>
    <script src="home/js/specific_listing.js"></script>

</body>

</html>