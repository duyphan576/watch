<x-admin.main.main>
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3><a href="{{ url('admin/order') }}"><button type="button" class="btn btn-outline-primary m-2"><i
                                    class="fa fa-home me-2"></i>Back</button></a></h3>
                </div>
                <h3>Order Detail of #{{ $order->OrderID }}</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->orderDetail as $detail)
                        <tr>
                            <th scope="row">#{{ $detail->OrderDetailID }}</th>
                            <td>{{ $detail->product->ProductName }}</td>
                            <td>{{ $detail->Quantity }}</td>
                            <td>{!! number_format($detail->Price, 0, '', '.') . ' &#8363' !!}</td>
                            <td>{!! number_format(($detail->Price * $detail->Quantity), 0, '', '.') . ' &#8363' !!}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="editdetails"><button type="button"
                                            class="btn btn-warning">Edit</button></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.main.main>