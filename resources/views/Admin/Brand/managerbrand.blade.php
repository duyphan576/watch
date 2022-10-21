<x-admin.main.main>
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h3>Brand</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Brand Name</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- {{$counter = 1}} -->
                        @foreach ($brands as $brand)
                            <x-admin.brand.brand-table-row>
                                <x-slot:counter>{{$counter++}}</x-slot:counter>
                                <x-slot:name>{{$brand->BrandName}}</x-slot:name>
                            </x-admin.brand.brand-table-row>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.main.main>