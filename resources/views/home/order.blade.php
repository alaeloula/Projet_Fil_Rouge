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
            height: 50px !important;
            width: 50px !important;
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

        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="h2font">ALL ORDERS</h1>

         

                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Product Title</th>
                        <th>Quantity</th>
                        <th>price</th>
                        <th>image</th>
                        <th>Payement Status</th>
                        <th>Delivery Status</th>
                        <th>cancel</th>
                       
                    </tr>
                    @forelse($orders as $order)
                    <tr>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->user->email}}</td>
                        <td>{{$order->product->title}}</td>
                        <td>{{$order->quantite}}</td>
                        <td>{{$order->quantite * $order->product->price}}</td>
                        <td><img src="/pd/{{$order->product->image}}" alt="" srcset="" height="50px" width="50px"></td>
                        <td>{{$order->payement_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        
                      
                        <td>
                            @if($order->delivery_status == 'processing')
                            <a href="{{url('cancel_order',$order->id)}}"><button class="btn btn-danger">Cancel</button></a>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="16">NO DATA FOUND</td>
                    </tr>
                    @endforeLse
                </table>
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