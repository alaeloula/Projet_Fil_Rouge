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

        .text_colore {
            color: black;
            padding-bottom: 20px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .div_design {
            padding-bottom: 15px;
        }

        .text_color {
            color: black;
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
                    <h2 class="h2font">Add Product</h2>

                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="div_design">
                            <label for="">Product title</label>
                            <input type="text" name="title" id="" class="text_color" placeholder="write a title" required>
                        </div>
                        <div class="div_design">
                            <label for="">Product description</label>
                            <input type="text" name="description" id="" class="text_color" placeholder="write a description" required>
                        </div>
                        <div class="div_design">
                            <label for="">Product price</label>
                            <input type="number" name="price" id="" class="text_color" placeholder="write a price" required>
                        </div>
                        <div class="div_design">
                            <label for="">Quantite</label>
                            <input type="number" min=0 name="quantite" id="" class="text_color" placeholder="write a price" required>
                        </div>
                        <div class="div_design">
                            <label for="">Product price_discount</label>
                            <input type="text" name="discount_price" id="" class="text_color" placeholder="write a price_discount" required>
                        </div>
                        <div class="div_design">
                            <label for="">Product category</label>
                            <select name="category" id="" class="text_colore" required>
                                <option value="" selected>choose an option</option>
                                @foreach($data as $dt)
                                <option value="{{$dt->id}}">{{$dt->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="div_design">
                            <label for="">Image</label>
                            <input type="file" name="image" required>
                        </div>

                        <input type="submit" name="submit" value="Add Product" class="btn btn-primary">
                    </form>
                </div>
            </div>




        </div>
    </div>




    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

</body>

</html>