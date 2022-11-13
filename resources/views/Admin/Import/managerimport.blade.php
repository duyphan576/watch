<x-admin.main.main>
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h3>Import</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Import ID</th>
                            <th scope="col">Staff Name</th>
                            <th scope="col">Total Quantity</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Date</th>
                            <th scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($counter = 1)
                        @foreach ($imports as $import)
                        <x-admin.import.import-table-row>
                            <x-slot:counter>{{$counter++}}</x-slot:counter>
                            <x-slot:id>{{$import->ImportID}}</x-slot:id>
                            <x-slot:staff>{{$import->staff->Username}}</x-slot:staff>
                            <x-slot:quantity>{{$import->TotalQuantity}}</x-slot:quantity>
                            <x-slot:price>{{$import->TotalPrice}}</x-slot:price>
                            <x-slot:date>{{$import->Date}}</x-slot:date>
                        </x-admin.import.import-table-row>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</x-admin.main.main>