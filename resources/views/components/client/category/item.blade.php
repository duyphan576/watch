<div class="col-lg-4 col-md-6">
    <div class="product">
        <div class="flip-container">
            <div class="flipper">
                <div class="front">
                    <a href="{{ url('category/detail/' . $id) }}"><img src="{{ $image }}" alt=""
                            class="img-fluid"></a>
                </div>
                <div class="back">
                    <a href="{{ url('category/detail/' . $id) }}"><img src="{{ $image }}" alt=""
                            class="img-fluid"></a>
                </div>
            </div>
        </div>
        <a href="{{ url('category/detail/' . $id) }}" class="invisible"><img
                src="{{ $image }}" alt="" class="img-fluid"></a>
        <div class="text">
            <h3><a href="{{ url('category/detail/' . $id) }}">{{ $name }}</a></h3>
            <p class="price">
                <del></del>{{ $price }}
            </p>
            <p class="buttons"><a href="{{ url('category/detail/' . $id) }}" class="btn btn-outline-secondary">View detail</a><a
                    href="{{ url('cart/add/' . $id) }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
        </div>
        <!-- /.text-->
    </div>
    <!-- /.product            -->
</div>