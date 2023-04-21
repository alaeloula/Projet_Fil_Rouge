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

</head>

<body>

    <div id="page" class="theia-exception">

        @include('home.header')


        <div class="row row_item mt-8" >
            <div class="col-sm-4">
                <figure>
                    <span class="ribbon off">-30%</span>
                    <div>
                        <img class="img-fluid lazy" src="/pd/{{$product->image}}" data-src="img/products/shoes/1.jpg" alt="">
                    </div>
                    <div data-countdown="2019/05/15" class="countdown"></div>
                </figure>
            </div>
            <div class="col-sm-8">
                <div>
                    <h3>{{$product->title}}</h3>
                </div>
                <p>{{$product->description}}</p>
                <div class="price_box">
                    <span class="new_price">${{$product->price}}</span>
                    <span class="old_price">${{$product->discount_price}}</span>
                </div> 
                 <div>
                    <h3>Quantite : {{$product->quantite}}</h3>
                    <h3>Category : {{$product->category->category_name}}</h3>
                </div>
                <ul>
                        <form action=" {{url('add_cart',$product->id)}}" method="post">
                            @csrf
                            <li><input type="number" name="quantite" value="1" min="1" id=""></li>
                            <li><input type="submit" class="btn_1" value="Add to cart"></li>
                        </form>
                      
                    </ul>
              
            </div>
        </div>

        @include('home.footer')
        <!--/footer-->
    </div>
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