<x-admin.main.main>
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h3>Storage</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Brand Name</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($counter = 1)
                        @foreach ($products as $product)
                        <x-admin.product.product-table-row>
                            <x-slot:counter>{{$counter++}}</x-slot:counter>
                            <x-slot:name>{{$product->ProductName}}</x-slot:name>
                            <x-slot:brand>{{$product->brand->BrandName}}</x-slot:brand>
                            <x-slot:quantity>{{$product->Price}}</x-slot:price>
                        </x-admin.product.product-table-row>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin.main.main>