<x-client.main>
  <section class="wrapper bg-gray">
    <div class="container py-3 py-md-5">
      <nav class="d-inline-block" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shop</li>
        </ol>
      </nav>
      <!-- /nav -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16 pt-12">
      <div class="row gy-10">
        <div class="col-lg-9 order-lg-2">
          <div class="row align-items-center mb-10 position-relative zindex-1">
            <div class="col-md-7 col-xl-8 pe-xl-20">
              <h2 class="display-6 mb-1">New Arrivals</h2>
              <p class="mb-0 text-muted">Showing {{$products->firstItem()}}–{{$products->lastItem()}} of {{$products->total()}} results</p>
            </div>
            <!--/column -->
            <div class="col-md-5 col-xl-4 ms-md-auto text-md-end mt-5 mt-md-0">
              <div class="form-select-wrapper">
                <select class="form-select">
                  <option value="popularity">Sort by popularity</option>
                  <option value="rating">Sort by average rating</option>
                  <option value="newness">Sort by newness</option>
                  <option value="price: low to high">Sort by price: low to high</option>
                  <option value="price: high to low">Sort by price: high to low</option>
                </select>
              </div>
              <!--/.form-select-wrapper -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
          <div class="grid grid-view projects-masonry shop mb-13">
            <div class="row gx-md-8 gy-10 gy-md-13 isotope">
              <!-- /.item -->
              @foreach($products as $product)
              <x-client.shop.item>
                  <x-slot:image>{{ asset('assets/image/product/' . $product->Image) }}</x-slot:image>
                  <x-slot:strap>{{ $strap->StrapName }}</x-slot:strap>
                  <x-slot:name>{{ $product->ProductName }}</x-slot:name>
                  <x-slot:price>{{ $product->Price }}</x-slot:price>
                </x-client.shop.item>
              @endforeach
            </div>
            <!-- /.row -->
          </div>
          <!-- /.grid -->
          {{$products->links('components/client/shop/pagination')}}
          
        </div>
        <!-- /column -->
        <aside class="col-lg-3 sidebar">
          <div class="widget mt-1">
            <h4 class="widget-title mb-3">Categories</h4>
            <ul class="list-unstyled ps-0">
              <li class="mb-1">
                <a href="#" class="align-items-center rounded link-body" data-bs-toggle="collapse"
                  data-bs-target="#clothing-collapse" aria-expanded="true"> Clothing <span
                    class="fs-sm text-muted ms-1">(21)</span>
                </a>
                <div class="collapse show mt-1" id="clothing-collapse" style="">
                  <ul class="btn-toggle-nav list-unstyled ps-2">
                    <li><a href="#" class="link-body">Dresses</a></li>
                    <li><a href="#" class="link-body">Knitwear</a></li>
                    <li><a href="#" class="link-body">Jeans</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <a href="#" class="align-items-center rounded collapsed link-body" data-bs-toggle="collapse"
                  data-bs-target="#electronics-collapse" aria-expanded="false"> Electronics <span
                    class="fs-sm text-muted ms-1">(19)</span>
                </a>
                <div class="collapse mt-1" id="electronics-collapse" style="">
                  <ul class="btn-toggle-nav list-unstyled ps-2">
                    <li><a href="#" class="link-body">Headphones</a></li>
                    <li><a href="#" class="link-body">Computers</a></li>
                    <li><a href="#" class="link-body">Cameras</a></li>
                    <li><a href="#" class="link-body">Annually</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <a href="#" class="align-items-center rounded collapsed link-body" data-bs-toggle="collapse"
                  data-bs-target="#shoes-collapse" aria-expanded="false"> Shoes <span
                    class="fs-sm text-muted ms-1">(12)</span>
                </a>
                <div class="collapse mt-1" id="shoes-collapse" style="">
                  <ul class="btn-toggle-nav list-unstyled ps-2">
                    <li><a href="#" class="link-body">Sneakers</a></li>
                    <li><a href="#" class="link-body">Sandals</a></li>
                    <li><a href="#" class="link-body">Boots</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <a href="#" class="align-items-center rounded collapsed link-body" data-bs-toggle="collapse"
                  data-bs-target="#home-collapse" aria-expanded="false"> Home & Kitchen <span
                    class="fs-sm text-muted ms-1">(16)</span>
                </a>
                <div class="collapse mt-1" id="home-collapse" style="">
                  <ul class="btn-toggle-nav list-unstyled ps-2">
                    <li><a href="#" class="link-body">Clocks</a></li>
                    <li><a href="#" class="link-body">Kettles</a></li>
                    <li><a href="#" class="link-body">Kitchenware</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title mb-3">Rating</h4>
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating5" checked>
              <label class="form-check-label" for="rating5">
                <span class="ratings five"></span>
              </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating4">
              <label class="form-check-label" for="rating4">
                <span class="ratings four"></span>
              </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating3">
              <label class="form-check-label" for="rating3">
                <span class="ratings three"></span>
              </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating2">
              <label class="form-check-label" for="rating2">
                <span class="ratings two"></span>
              </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating1">
              <label class="form-check-label" for="rating1">
                <span class="ratings one"></span>
              </label>
            </div>
            <!-- /.form-check -->
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title mb-3">Size</h4>
            <div class="form-check mb-1">
              <input class="form-check-input" type="checkbox" id="xs" checked>
              <label class="form-check-label" for="xs">XS <span class="fs-sm text-muted ms-1">(23)</span></label>
            </div>
            <div class="form-check mb-1">
              <input class="form-check-input" type="checkbox" id="s">
              <label class="form-check-label" for="s">S <span class="fs-sm text-muted ms-1">(253)</span></label>
            </div>
            <div class="form-check mb-1">
              <input class="form-check-input" type="checkbox" id="m">
              <label class="form-check-label" for="m">M <span class="fs-sm text-muted ms-1">(65)</span></label>
            </div>
            <div class="form-check mb-1">
              <input class="form-check-input" type="checkbox" id="l">
              <label class="form-check-label" for="l">L <span class="fs-sm text-muted ms-1">(156)</span></label>
            </div>
            <div class="form-check mb-1">
              <input class="form-check-input" type="checkbox" id="xl">
              <label class="form-check-label" for="xl">XL <span class="fs-sm text-muted ms-1">(74)</span></label>
            </div>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title mb-3">Price</h4>
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="price" id="price1" checked>
              <label class="form-check-label" for="price1"> $0.00 - $50.00 </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="price" id="price2">
              <label class="form-check-label" for="price2"> $0.00 - $50.00 </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="price" id="price3">
              <label class="form-check-label" for="price3"> $50.00 - $100.00 </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="price" id="price4">
              <label class="form-check-label" for="price4"> $150.00 - $200.00 </label>
            </div>
            <!-- /.form-check -->
            <div class="row">
              <div class="col-7 col-md-5 col-lg-12 col-xl-10 col-xxl-10">
                <div class="d-flex align-items-center mt-4">
                  <input type="number" class="form-control form-control-sm" placeholder="$0.00" min="0">
                  <div class="text-muted mx-2">‒</div>
                  <input type="number" class="form-control form-control-sm" placeholder="$50.00" max="50">
                </div>
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.widget -->
        </aside>
        <!-- /column .sidebar -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-gray">
    <div class="container py-12 py-md-14">
      <div class="row gx-lg-8 gx-xl-12 gy-8">
        <div class="col-md-6 col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <img src="./assets/img/icons/solid/shipment.svg"
                class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
            </div>
            <div>
              <h4 class="mb-1">Free Shipping</h4>
              <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
            </div>
          </div>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <img src="./assets/img/icons/solid/push-cart.svg"
                class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
            </div>
            <div>
              <h4 class="mb-1">30 Days Return</h4>
              <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
            </div>
          </div>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <img src="./assets/img/icons/solid/verify.svg"
                class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
            </div>
            <div>
              <h4 class="mb-1">2-Years Warranty</h4>
              <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
            </div>
          </div>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
</x-client.main>