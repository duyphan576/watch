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
                <li aria-current="page" class="breadcrumb-item active">Ladies</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-3">
            <!--
              *** MENUS AND FILTERS ***
              _________________________________________________________
              -->
            <div class="card sidebar-menu mb-4">
              <div class="card-header">
                <h3 class="h4 card-title">Strap type</h3>
              </div>
              <div class="card-body">
                <ul class="nav nav-pills flex-column category-menu">
                  <li>
                    <a href="{{ url('/category') }}" class="nav-link {{ Route::current()->parameter('strapID') == null ? 'active' : '' }}">All <span
                        class="badge badge-secondary">42</span></a>
                  </li>
                  @foreach ($straps as $strapFilter)
                  <li>
                    <a href="{{ url('/category/' . $strapFilter->StrapID) }}" class="nav-link {{ $strapFilter->StrapID == Route::current()->parameter('strapID') ? 'active' : '' }}">{{ $strapFilter->StrapName }} <span
                        class="badge badge-secondary">42</span></a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="card sidebar-menu mb-4">
              <div class="card-header">
                <h3 class="h4 card-title">Brands <a href="#" class="btn btn-sm btn-danger pull-right"><i
                      class="fa fa-times-circle"></i> Clear</a></h3>
              </div>
              <div class="card-body">
                <form action="#" method="GET">
                  @if (Request::input('search'))
                      <input type="text" name="search" value="{{ Request::input('search') }}" hidden>
                  @endif
                  <div class="form-group">
                    @foreach ($brands as $brand)
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="brand[]" value="{{ $brand->BrandID }}" {{ Request::get('brand') && in_array($brand->BrandID, Request::get('brand')) ? 'checked' : '' }}> {{ $brand->BrandName }} (10)
                      </label>
                    </div>
                    @endforeach
                  </div>
                  <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>
                </form>
              </div>
            </div>
            <div class="card sidebar-menu mb-4">
              <div class="card-header">
                <h3 class="h4 card-title">Colours <a href="#" class="btn btn-sm btn-danger pull-right"><i
                      class="fa fa-times-circle"></i> Clear</a></h3>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"><span class="colour white"></span> White (14)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"><span class="colour blue"></span> Blue (10)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"><span class="colour green"></span> Green (20)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"><span class="colour yellow"></span> Yellow (13)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"><span class="colour red"></span> Red (10)
                      </label>
                    </div>
                  </div>
                  <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>
                </form>
              </div>
            </div>
            <!-- *** MENUS AND FILTERS END ***-->
            <div class="banner"><a href="#"><img src="User/img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
          </div>
          <div class="col-lg-9">
            <div class="box">
              <h1>Ladies</h1>
              <p>In our Ladies department we offer wide selection of the best products we have found and carefully
                selected worldwide.</p>
            </div>
            <div class="box info-bar">
              <div class="row">
                <div class="col-md-12 col-lg-4 products-showing">Showing <strong>{{$products->count()}}</strong> of
                  <strong>{{$products->total()}}</strong>
                  products
                </div>
                <div class="col-md-12 col-lg-7 products-number-sort">
                  <form class="form-inline d-block d-lg-flex justify-content-between flex-column flex-md-row">
                    <div class="products-number"><strong>Show</strong><a href="#"
                        class="btn btn-sm btn-primary">12</a><a href="#"
                        class="btn btn-outline-secondary btn-sm">24</a><a href="#"
                        class="btn btn-outline-secondary btn-sm">All</a><span>products</span></div>
                    <div class="products-sort-by mt-2 mt-lg-0"><strong>Sort by</strong>
                      <select name="sort-by" class="form-control">
                        <option>Price</option>
                        <option>Name</option>
                        <option>Sales first</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="row products">
              @foreach ($products as $product)
              <x-client.category.item>
                <x-slot:id>{{ $product->ProductID }}</x-slot:id>
                <x-slot:image>{{ asset('assets/image/product/' . $product->Image) }}</x-slot:image>
                <x-slot:name>{{ $product->ProductName }}</x-slot:name>
                <x-slot:price>{!! number_format($product->Price, 0, '', '.') . ' &#8363' !!}</x-slot:price>
              </x-client.category.item>
              @endforeach
            </div>
            <div class="pages">
              {{ $products->links('components/client/category/pagination') }}
            </div>
          </div>
          <!-- /.col-lg-9-->
        </div>
      </div>
    </div>
  </div>
</x-client.main.main>