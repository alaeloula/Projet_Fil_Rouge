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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
    @include('sweetalert::alert')
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
                            <a href="{{url('remove_cart',$pd->pivot->id)}}" class="" onclick="">supp</a>
                        </td>

                    </tr>
                    <?php $totalePrice += $pd->price * $pd->pivot->quantite ?>
                    @endforeach
                </tbody>
            </table>
            <center>
                <h1 class="total">Total Price : {{$totalePrice}}</h1>
            </center>
            <center>
                  <div>
                <h1 style="font-size: 25px; padding-bottom: 15 px;">
                    Proceed To Order
                </h1>
                <a href="{{url('cash_order')}}" class="btn_1">Cash On Delivery</a>
                <a href="{{url('stripe',$totalePrice)}}" class="btn_1 gray">Pay Using Card</a>
            </div>
            </center>
          

        </div>


        <!--/footer-->
    </div>
    @include('home.footer')
    <!-- page -->

    <div id="toTop"></div><!-- Back to top button -->

    <script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getATTribute('href');

            Swal.fire({
                icon: 'warning',
                title: 'are u sure to cancel product',
                text: 'you will not be able to revert this',
               buttons:true,
                dangerMode:true
            }).then((willCancel)=>{
                if(willCancel){
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>

    <!-- COMMON SCRIPTS -->
    <script src="home/js/common_scripts.min.js"></script>
    <script src="home/js/main.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="home/js/sticky_sidebar.min.js"></script>
    <script src="home/js/specific_listing.js"></script>

</body>

</html>