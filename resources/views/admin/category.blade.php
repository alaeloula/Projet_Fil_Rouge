<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .h2font {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .input_color {
            color: black;
        }

        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid white;
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
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <div class="div_center">
                    <h2 class="h2font">Add Category</h2>
                    <form action="{{route('Category.store')}}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="write category name" class="input_color">
                        <input type="submit" name="submit" value="Add category" class="btn btn-primary">
                    </form>
                </div>


                <table class="center">
                    <tr>
                        <th>name</th>
                        <th>action</th>
                    </tr>
                    @foreach($data as $dt)
                    <tr>
                        <td> {{$dt->category_name}} </td>
                        <td>
                            <form action="{{route('Category.destroy',[$dt->id])}}" method="post">
                                @method('delete')
                                @csrf
                                <input onclick="return confirm('are you sure to delete this')" type="submit" name="" id="" value="delete"  class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>




        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')

</body>

</html>