<x-admin.main.main>
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h3>Product</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Strap</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{$counter = 1}}
                        @foreach ($products as $product)    
                        <x-admin.product.product-table-row>
                            <x-slot:counter>{{$counter++}}</x-slot:counter>
                            <x-slot:name>{{$product->ProductName}}</x-slot:name>
                            <x-slot:brand>{{$product->brand->BrandNmae}}</x-slot:brand>
                            <x-slot:strap>{{$product->strap->StrapName}}</x-slot:strap>
                            <x-slot:price>{{$product->Price}}</x-slot:price>
                            <x-slot:description>{{'Hello'}}</x-slot:description>
                        </x-admin.product.product-table-row>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.main.main>