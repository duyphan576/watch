<x-client.main.main>
  <div id="all">
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- breadcrumb-->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Ladies</a></li>
                <li class="breadcrumb-item"><a href="#">Tops</a></li>
                <li aria-current="page" class="breadcrumb-item active">White Blouse Armani</li>
              </ol>
            </nav>
          </div>
          <div class="banner"><a href="#"><img src="User/img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
        </div>
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
                <p class="text-center buttons"><a href="basket" class="btn btn-primary"><i
                      class="fa fa-shopping-cart"></i> Add to cart</a><a href="basket"
                    class="btn btn-outline-primary"><i class="fa fa-heart"></i> Add to wishlist</a></p>
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
            <p></p>
            <h4>Product details</h4>
            <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
            <h4>Material &amp; care</h4>
            <ul>
              <li>Polyester</li>
              <li>Machine wash</li>
            </ul>
            <h4>Size &amp; Fit</h4>
            <ul>
              <li>Regular fit</li>
              <li>The model (height 5'8" and chest 33") is wearing a size S</li>
            </ul>
            <blockquote>
              <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details.
                  Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em></p>
            </blockquote>
            <hr>
            <div class="social">
              <h4>Show it to your friends</h4>
              <p><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#"
                  class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i
                    class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></p>
            </div>
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