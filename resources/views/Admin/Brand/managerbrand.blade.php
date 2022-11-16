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
                <h3>Brand</h3>
                <a href="{{ url('admin/brand/add') }}"><button type="button" class="btn btn-success">Add</button></a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#Id</th>
                            <th scope="col">Brand Name</th>
                            <th scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                        <x-admin.brand.brand-table-row>
                            <x-slot:id>{{$brand->BrandID}}</x-slot:id>
                            <x-slot:name>{{$brand->BrandName}}</x-slot:name>
                        </x-admin.brand.brand-table-row>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
                    <form method="POST" action="{{ route('deleteBrand') }}">
                        @csrf
                        <input type="text" id="idToDel" name="productID" hidden>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.main.main>