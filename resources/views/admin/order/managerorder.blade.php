<x-admin.main.main>
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
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h3>Orders</h3>
                <form action="" method="GET">
                    <div class="form-group">
                        <label for="fromDate">From date</label>
                        <input type="date" class="form-control" id="fromDate" name="fromDate">
                    </div>
                    <div class="form-group">
                        <label for="toDate">To date</label>
                        <input type="date" class="form-control"  id="toDate" name="toDate">
                    </div>
                    <button type="submit" class="btn btn-primary">Filter</button>
                </form>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Order Details</th>
                            <th scope="col">Status Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <form action="{{ url('admin/order') }}" method="POST">
                            @csrf
                            <tr>
                                <th scope="row"># {{$order->OrderID}}</th>
                                <td>{{ $order->user->Username }}</td>
                                <td>{!! number_format($order->TotalPrice, 0, '', '.') . ' &#8363' !!}</td>
                                <td>{{ $order->Date }}</td>
                                <td>
                                    <input type="text" name="orderID" value="{{ $order->OrderID }}" hidden>
                                    <select class="form-select" aria-label="Floating label select example" id="status"
                                        name="status" if @if ($order->Status === 2 || $order->Status === 3)
                                        disabled
                                        @endif
                                        >
                                        <option value="0" {{ $order->Status == 0 ? 'selected' : '' }}>unprepared
                                        </option>
                                        <option value="1" {{ $order->Status == 1 ? 'selected' : '' }}>Being prepared
                                        </option>
                                        <option value="2" {{ $order->Status == 2 ? 'selected' : '' }}>Received</option>
                                        <!-- Xong thì không cho thay đổi -->
                                        <option value="3" {{ $order->Status == 3 ? 'selected' : '' }}>Cancelled</option>
                                        <!-- Xong thì không cho thay đổi -->
                                    </select>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ url('admin/order/' . $order->OrderID) }}">
                                            <button type="button" class="btn btn-success">Show</button>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </td>
                            </tr>
                        </form>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.main.main>