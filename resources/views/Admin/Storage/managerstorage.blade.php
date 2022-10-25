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
                            <!--<th scope="col">Brand Name</th>-->
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($counter = 1)
                        @foreach ($storages as $storage)
                        <x-admin.storage.storage-table-row>
                            <x-slot:counter>{{$counter++}}</x-slot:counter>
                            <x-slot:product>{{$storage->product->ProductName}}</x-slot:product>
                            <!--<x-slot:brand>{{$storage->brand->BrandName}}</x-slot:brand>-->
                            <x-slot:quantity>{{$storage->Quantity}}</x-slot:quantity>
                        </x-admin.storage.storage-table-row>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin.main.main>