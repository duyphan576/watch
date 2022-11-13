<x-admin.main.main>
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3><a href="{{ url('admin/import-history') }}"><button type="button" class="btn btn-outline-primary m-2"><i
                                    class="fa fa-home me-2"></i>Back</button></a></h3>
                </div>
                <h3>Import Detail of #{{ $import->ImportID }}</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Product ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($import->importDetail as $detail)
                        <tr>
                            <th scope="row">{{ $detail->ImportDetailID }}</th>
                            <td>{{ $detail->product->ProductID }}</td>
                            <td>{{ $detail->product->ProductName }}</td>
                            <td>{{ $detail->Quantity }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.main.main>