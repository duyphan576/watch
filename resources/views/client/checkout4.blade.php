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
                <li aria-current="page" class="breadcrumb-item active">Checkout - Order review</li>
              </ol>
            </nav>
          </div>
          <div id="checkout" class="col-lg-9">
            <div class="box">
              <form method="POST" action="{{ route('placeOrder') }}">
                @csrf
                <h1>Checkout - Order review</h1>
                <div class="nav flex-column flex-sm-row nav-pills">
                  <a href="checkout1" class="nav-link flex-sm-fill text-sm-center">
                    <i class="fa fa-map-marker"> </i>Address
                  </a>
                  <a href="checkout2" class="nav-link flex-sm-fill text-sm-center">
                    <i class="fa fa-truck"> </i>Delivery Method
                  </a>
                  <a href="checkout3" class="nav-link flex-sm-fill text-sm-center">
                    <i class="fa fa-money"> </i>Payment Method
                  </a>
                  <a href="#" class="nav-link flex-sm-fill text-sm-center active">
                    <i class="fa fa-eye"> </i>Order Review
                  </a>
                </div>
                <div class="content">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Quantity</th>
                          <th>Unit price</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach (Cart::content() as $item)
                        <tr>
                          <td><a href="#"><img src="{{ asset('assets/image/product/' . $item->options->image) }}" alt="{{ $item->name }}"></a></td>
                          <td><a href="#">{{ $item->name }}</a></td>
                          <td>{{ $item->qty }}</td>
                          <td>{!! number_format($item->price, 0, '', '.') . ' &#8363' !!}</td>
                          <td>{!! number_format($item->total, 0, '', '.') . ' &#8363' !!}</td>
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="4">Total</th>
                          <th>{!! Cart::total() . ' &#8363' !!}</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.table-responsive-->
                </div>
                <!-- /.content-->
                <div class="box-footer d-flex justify-content-between"><a href="checkout3"
                    class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Back to payment method</a>
                  <button type="submit" class="btn btn-primary">Place an order<i
                      class="fa fa-chevron-right"></i></button>
                </div>
              </form>
            </div>
            <!-- /.box-->
          </div>
          <!-- /.col-lg-9-->
          <div class="col-lg-3">
            <div id="order-summary" class="card">
              <div class="card-header">
                <h3 class="mt-4 mb-4">Order summary</h3>
              </div>
              <div class="card-body">
                <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.
                </p>
                @include('components.client.cart.bill')
              </div>
            </div>
          </div>
          <!-- /.col-lg-3-->
        </div>
      </div>
    </div>
  </div>
</x-client.main.main>