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
                <li aria-current="page" class="breadcrumb-item"><a href="#">My orders</a></li>
                <li aria-current="page" class="breadcrumb-item active">Order # 1735</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-3">
            <!--
              *** CUSTOMER MENU ***
              _________________________________________________________
              -->
            <div class="card sidebar-menu">
              <div class="card-header">
                <h3 class="h4 card-title">Customer section</h3>
              </div>
              <div class="card-body">
                <ul class="nav nav-pills flex-column"><a href="customer-orders" class="nav-link active"><i
                      class="fa fa-list"></i> My orders</a><a href="customer-wishlist" class="nav-link"><i
                      class="fa fa-heart"></i> My wishlist</a><a href="customer-account" class="nav-link"><i
                      class="fa fa-user"></i> My account</a><a href="index" class="nav-link"><i
                      class="fa fa-sign-out"></i> Logout</a></ul>
              </div>
            </div>
            <!-- /.col-lg-3-->
            <!-- *** CUSTOMER MENU END ***-->
          </div>
          <div id="customer-order" class="col-lg-9">
            <div class="box">
              <h1>Order #{{ $order->OrderID }}</h1>
              <p class="lead">Order #{{$order->OrderID}} was placed on <strong>{{ $order->Date }}</strong> and is currently <strong>Being
                  prepared</strong>.</p>
              <p class="text-muted">If you have any questions, please feel free to <a href="contact">contact us</a>, our
                customer service center is working for you 24/7.</p>
              <hr>
              <div class="table-responsive mb-4">
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
                    @foreach ($orderDetails as $orderDetail)
                    <tr>
                      <td><a href="#"><img src="User/img/detailsquare.jpg" alt="White Blouse Armani"></a></td>
                      <td><a href="#">{{ $orderDetail->product->ProductName }}</a></td>
                      <td>{{ $orderDetail->Quantity }}</td>
                      <td>{!! number_format($orderDetail->Price, 0, '', '.') . ' &#8363' !!}</td>
                      <td>{!! number_format(($orderDetail->Price * $orderDetail->Quantity), 0, '', '.') . ' &#8363' !!}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th colspan="4" class="text-right">Total</th>
                      <th>{!! number_format(($order->TotalPrice), 0, '', '.') . ' &#8363' !!}</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.table-responsive-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-client.main.main>