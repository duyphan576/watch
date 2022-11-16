<x-admin.main.main>
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3>Strap</h3>
                    <a href="strap/add"><button type="button" class="btn btn-success">Add</button></a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            
                            <th scope="col">Strap Name</th>
                            <th scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($strap as $strap)
                            <x-admin.strap.strap-table-row>
                                
                                <x-slot:name>{{ $strap->StrapName }}</x-slot:name>
                                <x-slot:id>{{ $strap->StrapID }}</x-slot:id>
                            </x-admin.strap.strap-table-row>
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
                        <form method="POST" action="{{ route('deleteStrap') }}">
                            @csrf
                            <input type="text" id="idToDel" name="strapID" hidden>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.main.main>
