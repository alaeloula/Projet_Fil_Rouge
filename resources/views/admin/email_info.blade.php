<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        label {
            display: inline-block;
            width: 200px;
            font-size: 15px;
            font-weight: bold;
        }

        input[type="text"] {
            color: black !important;
            border-radius: 10%;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <h1 style="text-align: center; font-size: 25px;">Send Email To {{$order->user->email}} </h1>
                <form action="{{url('send_user_email',$order->id)}}" method="post">
                    @csrf
                    <div style="padding-left: 35%;padding-top: 30px;">
                        <label for="">Email Greeting</label>
                        <input type="text" name="greeting">
                    </div>
                    <div style="padding-left: 35%;padding-top: 30px;">
                        <label for="">Email Firstline</label>
                        <input type="text" name="firstline">
                    </div>
                    <div style="padding-left: 35%;padding-top: 30px;">
                        <label for="">Email body</label>
                        <input type="text" name="body">
                    </div>
                    <div style="padding-left: 35%;padding-top: 30px;">
                        <label for="">Email Button</label>
                        <input type="text" name="button">
                    </div>
                    <div style="padding-left: 35%;padding-top: 30px;">
                        <label for="">Email Url</label>
                        <input type="text" name="url">
                    </div>
                    <div style="padding-left: 35%;padding-top: 30px;">
                        <label for="">Email Lastligne</label>
                        <input type="text" name="lastligne">
                    </div>
                    <div style="padding-left: 35%;padding-top: 30px;">
                        <input type="submit" value="Send Email" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')

</body>

</html>