<x-admin.main.main>
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h3>Orders</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Staff</th>
                            <th scope="col">Total Quantity</th>
                            <th scope="col">Date</th>
                            <th scope="col">Import Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($imports as $import)
                            <tr>
                                <th scope="row"># {{$import->OrderID}}</th>
                                <td>{{ $import->staff->Fullname }}</td>
                                <td>{{ $import->TotalQuantity }}</td>
                                <td>{{ $import->Date }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ url('admin/import-history/' . $import->ImportID) }}">
                                            <button type="button" class="btn btn-success">Show</button>
                                        </a>
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