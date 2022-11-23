<x-client.main.main>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
  <div id="all">
    <div id="content">
      <div class="container">
        <div class="col-lg-12 order-1 order-lg-2">
          <div id="productMain" class="row">
            <div class="col-md-6">
              <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                <div class="item"> <img src="{{ asset('assets/image/product/' . $product->Image) }}" alt=""
                    class="img-fluid"></div>
                <div class="item"> <img src="{{ asset('assets/image/product/' . $product->Image) }}" alt=""
                    class="img-fluid"></div>
                <div class="item"> <img src="{{ asset('assets/image/product/' . $product->Image) }}" alt=""
                    class="img-fluid"></div>
              </div>
              <div class="ribbon sale">
                <div class="theribbon">SALE</div>
                <div class="ribbon-background"></div>
              </div>
              <!-- /.ribbon-->
              <div class="ribbon new">
                <div class="theribbon">NEW</div>
                <div class="ribbon-background"></div>
              </div>
              <!-- /.ribbon-->
            </div>
            <div class="col-md-6">
              <div class="box">
                <h1 class="text-center">{{ $product->ProductName }}</h1>
                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material
                    &amp; care and sizing</a></p>
                <p class="price">{!! number_format($product->Price, 0, '', '.') . ' &#8363' !!}</p>
                <p class="text-center buttons">
                  <a href="{{ url('cart/add/' . $product->ProductID) }}" class="btn btn-primary"><i
                      class="fa fa-shopping-cart"></i> Add to cart</a>
                </p>
              </div>
              <div data-slider-id="1" class="owl-thumbs">
                <button class="owl-thumb-item"><img src="{{ asset('assets/image/product/' . $product->Image) }}" alt=""
                    class="img-fluid"></button>
                <button class="owl-thumb-item"><img src="{{ asset('assets/image/product/' . $product->Image) }}" alt=""
                    class="img-fluid"></button>
                <button class="owl-thumb-item"><img src="{{ asset('assets/image/product/' . $product->Image) }}" alt=""
                    class="img-fluid"></button>
              </div>
            </div>
          </div>
          <div id="details" class="box">
            {!! nl2br($product->Description) !!}
          </div>
          <div class="row same-height-row">
            <div class="col-md-3 col-sm-6">
              <div class="box same-height">
                <h3>You may also like these products</h3>
              </div>
            </div>
            @foreach ($suggestedProducts as $item)
            <div class="col-md-3 col-sm-6">
              <div class="product same-height">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front"><a href="{{ url('category/detail/' . $item->ProductID) }}"><img
                          src="{{ asset('assets/image/product/' . $item->Image) }}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="back"><a href="{{ url('category/detail/' . $item->ProductID) }}"><img
                          src="{{ asset('assets/image/product/' . $item->Image) }}" alt="" class="img-fluid"></a>
                    </div>
                  </div>
                </div><a href="{{ url('category/detail/' . $item->ProductID) }}" class="invisible"><img
                    src="{{ asset('assets/image/product/' . $item->Image) }}" alt="" class="img-fluid"></a>
                <div class="text">
                  <h3>{{ $item->ProductName }}</h3>
                  <p class="price">{!! number_format($product->Price, 0, '', '.') . ' &#8363' !!}</p>
                </div>
              </div>
              <!-- /.product-->
            </div>
            @endforeach
          </div>
        </div>
        <!-- /.col-md-9-->
      </div>
    </div>
  </div>
  </div>
</x-client.main.main>