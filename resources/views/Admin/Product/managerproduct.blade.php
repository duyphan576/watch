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
                        @php($counter = 1)
                        @foreach ($products as $product)
                        <x-admin.product.product-table-row>
                            <x-slot:counter>{{$counter++}}</x-slot:counter>
                            <x-slot:name>{{$product->ProductName}}</x-slot:name>
                            <x-slot:brand>{{$product->brand->BrandName}}</x-slot:brand>
                            <x-slot:strap>{{$product->strap->StrapName}}</x-slot:strap>
                            <x-slot:price>{{$product->Price}}</x-slot:price>
                            <x-slot:description>{{'Hello'}}</x-slot:description>
                            <x-slot:id>{{$product->ProductID}}</x-slot:id>
                        </x-admin.product.product-table-row>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Delete</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure want to delete this item ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form method="POST" action="{{ route('deleteProduct') }}">
                            @csrf
                            <input type="text" id="idToDel" name="productID" hidden>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.main.main>