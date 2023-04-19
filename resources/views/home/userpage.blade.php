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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        textarea {
            height: 150px;

            margin-left: 10px !important;
        }
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




            <!-- comment and replay -->
            <div style="text-align : center; ">
                <h1 style="font-size: 30px; text-align: center; padding-top: 20px;padding-bottom: 20px;">Comments</h1>
                <form action="{{url('add_comment')}}" method="POST">
                    @csrf
                    <textarea name="comment" id="" cols="30" rows="10" required></textarea>
                    <div>
                        <button type="submit" class="btn_1 gray tooltip-1">Comments</button>

                    </div>
                </form>
            </div>


            <div style="display:flex; flex-direction:column ; justify-content: center;   margin: 100px;">
                <h1 style="font-size: 30px;padding-bottom: 10px; padding-top: 10px;">ALL Comments</h1>
                @if(Auth::id())
                @foreach($comments as $comment)
                <div>
                    <b>{{$comment->user->name}}</b>
                    <p>{{$comment->comment}} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, enim optio? Consequatur enim amet fugiat saepe excepturi dolorum corporis optio.</p>
                    <a href="javascript:void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}" class="btn_1 gray tooltip-1">Reply</a>
                    @foreach($replies as $reply)
                    @if($reply->comment->id == $comment->id)
                    <div
                    style="padding-left: 3%;padding-top: 10px;padding-bottom: 10px;"
                    >
                        <b>reply by : {{$reply->user->name}}</b>
                        <p>{{$reply->reply}}</p>
                    </div>
                    @endif
                    @endforeach
                </div>
                @endforeach
                @endif
                <div style="display: flex; flex-direction: column;display: none;" class="replyDiv">
                    <form action="{{url('add_reply')}}" method="post">
                        @csrf
                        <input type="text" id="commentid" name="commentid" hidden="">
                        <textarea name="reply" id="" cols="30" rows="5" placeholder="write something here"></textarea>
                        <div>
                            <button type="submit" class="btn_1 gray tooltip-1">reply</button>
                            <a href="javascript:void(0);" class="btn" onclick="reply_close(this)">close</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- end comment and replay -->
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





    <script>
        function reply(caller) {

            document.getElementById('commentid').value = $(caller).attr('data-Commentid')
            $('.replyDiv').insertAfter($(caller))
            console.log($('.replyDiv'))
            $('.replyDiv').show()
        }

        function reply_close(caller) {

            $('.replyDiv').hide()
        }
    </script>
      <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>

    <!-- COMMON SCRIPTS -->
    <script src="home/js/common_scripts.min.js"></script>
    <script src="home/js/main.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="home/js/sticky_sidebar.min.js"></script>
    <script src="home/js/specific_listing.js"></script>


</body>

</html>