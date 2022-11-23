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
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3>Import</h3>
                    <a href="{{ url('admin/import/cart') }}"><button type="button"
                            class="btn btn-success">Cart</button></a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Strap</th>
                            <th scope="col">Quantity in stock</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{$product->ProductID}}</th>
                            <td>{{ $product->ProductName }}</td>
                            <td>{{ $product->brand->BrandName}}</td>
                            <td>{{ $product->strap->StrapName}}</td>
                            <td>{{ $product->Quantity}}</td>
                            <form action="{{ url('admin/import/cart/add') }}" method="POST">
                                <td><input type="number" name="quantity" id="quantity"></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        @csrf
                                        <input type="text" name="productID" value="{{ $product->ProductID }}" hidden>
                                        <button type="submit" class="btn btn-primary">Add to cart</button>
                                    </div>
                                </td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.main.main>