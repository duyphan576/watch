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
        <div id="basket" class="col-lg-9">
          <div class="box">
            <form method="post" action="">
              @csrf
              <h1>Shopping cart</h1>
              <p class="text-muted">You currently have {{ Cart::count() }} item(s) in your cart.</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2">Product</th>
                      <th>Quantity</th>
                      <th>Unit price</th>
                      <th colspan="2">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach (Cart::content() as $item)
                    <tr>
                      <td><a href=""><img src="{{ asset('assets/image/product/' . $item->options->image) }}"
                            alt="{{ $item->name }}"></a></td>
                      <td><a href="">{{ $item->name }}</a></td>
                      <td>
                        <input type="number" min=1 rowId="{{ $item->rowId }}" value="{{ $item->qty }}"
                          class="form-control prc">
                      </td>
                      <td>{!! number_format($item->price, 0, '', '.') . ' &#8363' !!}</td>
                      <td>{!! number_format($item->total, 0, '', '.') . ' &#8363' !!}</td>
                      <td><a href="{{ url('/cart/remove/' . $item->rowId) }}"><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th colspan="5">Total</th>
                      <th colspan="2">{!! Cart::total() . ' &#8363' !!}</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.table-responsive-->
              <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                <div class="left">
                  <a href="{{ url('/category') }}" class="btn btn-outline-secondary">
                    <i class="fa fa-chevron-left"></i> Continue shopping
                  </a>
                </div>
                <div class="right">
                  <button type="button" class="btn btn-outline-secondary" onclick="location.reload()"><i
                      class="fa fa-refresh"></i> Update
                    cart</button>
                  <a href="{{ url('checkout/address') }}" class="btn btn-primary">Proceed to checkout <i
                      class="fa fa-chevron-right"></i></a>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.col-lg-9-->
        <div class="col-lg-3">
          <div id="order-summary" class="box">
            <div class="box-header">
              <h3 class="mb-0">Order summary</h3>
            </div>
            <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.
            </p>
            @include('components.client.cart.bill')
          </div>
          <div class="box">
            <div class="box-header">
              <h4 class="mb-0">Coupon code</h4>
            </div>
            <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
            <form>
              <div class="input-group">
                <input type="text" class="form-control"><span class="input-group-append">
                  <button type="button" class="btn btn-primary"><i class="fa fa-gift"></i></button></span>
              </div>
              <!-- /input-group-->
            </form>
          </div>
        </div>
        <!-- /.col-md-3-->
      </div>
    </div>
  </div>
  </div>
  <x-slot:script>
    <script>
      $('.table').on('input', '.prc', function() {
        var rowId = $(this).attr('rowId');
        var quantity = $(this).val();
        var prevQuantity = $(this).attr('value');
        if ($.isNumeric(quantity) && (quantity != prevQuantity) && (quantity != 0)) {
          $.ajax({
              type: 'get',
              url: '/cart/update/' + rowId + '/' + quantity,
              success: function(data){
                  console.log(data);
                  if (data == 'success') {                
                    location.reload();
                  }
                  else{
                      alert(data);
                  }
  
              },
              error:function(data){
  
              }
          });
        }
      });
    </script>
  </x-slot:script>
</x-client.main.main>