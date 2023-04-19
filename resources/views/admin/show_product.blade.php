<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .h2font {
            font-size: 40px;
            padding-bottom: 40px;
        }

        table tr th {
            color: white;
        }

        table tr td {
            color: white;
        }

        .img_size {
            width: 200px;
            height: 200px;
        }
        table {
            width: 100% !important;
            overflow-x: auto !important;
            display: inline-block !important;
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
                <h2 class="h2font">All Product</h2>
                <table class="table table-dark">
                    <tr>
                        <th>Product title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Product image</th>
                    </tr>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantite}}</td>
                        <td>{{$product->category->category_name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td><img src="/pd/{{$product->image}}" alt="" srcset="" class="img_size"></td>
                        <td>
                            <a href="{{route('product.edit',[$product->id])}}" class="btn btn-primary">edit</a>
                        </td>
                        <td>
                            <form action="{{route('product.destroy',[$product->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">delete</button>
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