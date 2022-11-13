<x-admin.main.main>
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3>Product</h3>
                    <a href="{{ url('admin/import/cart/place-order') }}">
                        <button type="button" class="btn btn-success">Import</button>
                    </a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#Id</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Cart::instance('import')->content() as $item)
                        <tr>
                            <th scope="row">#{{$item->id}}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->qty}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <form action="{{ url('admin/import/cart/remove') }}" method="POST">
                                        @csrf
                                        <input type="text" name="rowId" value="{{ $item->rowId }}" hidden>
                                        <button type="submit" class="btn btn-primary">Remove</button>
                                    </form>
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