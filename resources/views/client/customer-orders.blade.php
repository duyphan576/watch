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
                <li aria-current="page" class="breadcrumb-item active">My orders</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-3">
            <!--
              *** CUSTOMER MENU ***
              _________________________________________________________
              -->
            @include('components/client/customer/customerMenu')
            <!-- /.col-lg-3-->
            <!-- *** CUSTOMER MENU END ***-->
          </div>
          <div id="customer-orders" class="col-lg-9">
            <div class="box">
              <h1>My orders</h1>
              <p class="lead">Your orders on one place.</p>
              <p class="text-muted">If you have any questions, please feel free to <a href="contact">contact us</a>, our
                customer service center is working for you 24/7.</p>
              <hr>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Order</th>
                      <th>Date</th>
                      <th>Total</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                    <tr>
                      <th># {{ $order->OrderID }}</th>
                      <td>{{ $order->Date }}</td>
                      <td>{!! number_format($order->TotalPrice, 0, '', '.') . ' &#8363' !!}</td>
                      <td>
                        <span @class([ 'badge' , 'badge-warning'=> $order->Status == 0,
                          'badge-primary' => $order->Status == 1,
                          'badge-success' => $order->Status == 2,
                          'badge-danger' => $order->Status == 3,
                          ])>
                          @switch($order->Status)
                          @case(0)
                          unprepared
                          @break
                          @case(1)
                          Being prepared
                          @break
                          @case(2)
                          Received
                          @break
                          @case(3)
                          Cancelled
                          @break
                          @endswitch
                        </span>
                      </td>
                      <td><a href="{{ url('/customer/order/' . $order->OrderID) }}"
                          class="btn btn-primary btn-sm">View</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-client.main.main>