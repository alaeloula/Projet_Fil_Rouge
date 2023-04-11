<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="home/css/bootstrap.custom.min.css" rel="stylesheet">
    <link href="home/css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="home/css/listing.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="home/css/custom.css" rel="stylesheet">
    <style>

    </style>
</head>

<body>

    <div id="page" class="theia-exception">

        @include('home.header')

        <main>
            @include('home.slider')
            <!-- /top_banner -->
            <div id="stick_here"></div>
            <!-- @include('home.sort') -->
            <!-- /toolbox -->
            @include('home.product')
            <!-- /col -->

            <!-- /col -->
            <!-- /container -->
            @include('home.filtre')
    </div>
    <!-- /row -->
    </div>
    </main>
    <!-- /main -->


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