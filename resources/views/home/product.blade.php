<div class="container margin_30">
    <div class="row">
        <div class="col-lg-9">
            @foreach($products as $product)
            <div class="row row_item">
                <div class="col-sm-4">
                    <figure>
                        <span class="ribbon off">-30%</span>
                        <a href="product-detail-1.html">
                            <img class="img-fluid lazy" src="/pd/{{$product->image}}" data-src="" alt="">
                            <!-- img/products/shoes/1.jpg -->
                        </a>
                        <div data-countdown="2019/05/15" class="countdown"></div>
                    </figure>
                </div>
                <div class="col-sm-8">
                    <a href="{{route('product.show',[$product->id])}}">
                        <h3>{{$product->title}}</h3>
                    </a>
                    <p>{{$product->description}}</p>
                    <div class="price_box">
                        <span class="new_price">${{$product->price}}</span>
                        <span class="old_price">${{$product->discount_price}}</span>
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
            @endforeach 
            <!-- /row_item -->
            
            <!-- /row_item -->
            <div class="">
                
                   {!!$products->withQueryString    ()->links('pagination::bootstrap-5')!!}
                
            </div>
        </div>
       