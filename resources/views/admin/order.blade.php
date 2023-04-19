<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .h2font {
            font-size: 40px;
            padding-bottom: 40px;
        }

        table {
            width: 100% !important;
            overflow-x: auto !important;
            display: inline-block !important;
        }

        table tr th {
            color: white;
        }

        table tr td {
            color: white;
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
                <h1 class="h2font">ALL ORDERS</h1>

                <div style="
                display: flex;
                justify-content: center;
                ">
                    <form action="{{url('search')}}" method="get">
                        @csrf
                        <input type="text" name="search" placeholder="search for order">
                        <input type="submit" value="search" class=" btn btn-primary">
                    </form>
                </div>

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
                        <th>Delivred</th>
                        <th>Print pdf</th>
                        <th>Send Email</th>
                    </tr>
                    @forelse($orders as $order)
                    <tr>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->user->email}}</td>
                        <td>{{$order->product->title}}</td>
                        <td>{{$order->quantite}}</td>
                        <td>{{$order->quantite * $order->product->price}}</td>
                        <td><img src="/pd/{{$order->product->image}}" alt="" srcset=""></td>
                        <td>{{$order->payement_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        @if($order->delivery_status == 'processing')
                        <td><a href="{{url('delivered',$order->id)}}"><button class="btn btn-primary">DELIVERED</button></a></td>
                        @else
                        <td>
                            <p style="color: green;">DELIVRED</p>
                        </td>
                        @endif
                        <td>
                            <a href="{{url('print',$order->id)}}"><button class="btn btn-secondary">print</button></a>
                        </td>
                        <td>
                            <a href="{{url('send_email',$order->id)}}"><button class="btn btn-info">Send Email</button></a>
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

        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')

</body>

</html>