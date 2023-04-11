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
        input{
            border-radius: 25px !important;
            border: 2px solid #ccc !important;
            padding: 10px 20px !important;
        }
        select {
            width: 215px;
            border-radius: 25px !important;
            border: 2px solid #ccc !important;
            padding: 10px 20px !important;
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
                    <h2 class="h2font">Update Product</h2>

                    <form action="{{route('product.update',[$product->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="div_design">
                            <label for="">Product title</label>
                            <input type="text" name="title" id="" class="text_color" value="{{$product->title}}" required>
                        </div>
                        <div class="div_design">
                            <label for="">Product description</label>
                            <input type="text" name="description" id="" class="text_color" value="{{$product->description}}" required>
                        </div>
                        <div class="div_design">
                            <label for="">Product price</label>
                            <input type="number" name="price" id="" class="text_color" value="{{$product->price}}" required>
                        </div>
                        <div class="div_design">
                            <label for="">Quantite</label>
                            <input type="number" min=0 name="quantite" id="" class="text_color" value="{{$product->quantite}}" required>
                        </div>
                        <div class="div_design">
                            <label for="">Product price_discount</label>
                            <input type="text" name="discount_price" id="" class="text_color" value="{{$product->discount_price}}" required>
                        </div>
                        <div class="div_design">
                            <label for="">Product category</label>
                            <select name="category" id="" class="text_colore" required>
                                <option value="{{$product->category->id}}" selected>{{$product->category->category_name}}</option>
                                @foreach($category as $dt)
                                @if($dt->id != $product->category->id)
                                <option value="{{$dt->id}}">{{$dt->category_name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="div_design">
                            <label for="">Current Product Image</label>
                            <img height="100" width="100" style="margin: auto;" src="/pd/{{$product->image}}" alt="" srcset="">
                        </div>
                        <div class="div_design">
                            <label for="">Change Product Image</label>
                            <input type="file" name="image">
                        </div>

                        <input type="submit" name="submit" value="update Product" class="btn btn-primary">
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