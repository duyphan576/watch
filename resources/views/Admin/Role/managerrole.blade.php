<x-admin.main.main>
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3>Role</h3>
                    <a href="role/add"><button type="button" class="btn btn-success">Add</button></a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Role Name</th>
                            <th scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- {{ $counter = 1 }} -->
                        @foreach ($role as $role)
                            <x-admin.role.role-table-row>
                                <x-slot:counter>{{ $counter++ }}</x-slot:counter>
                                <x-slot:name>{{ $role->RoleName }}</x-slot:name>
                                <x-slot:id>{{ $role->RoleID }}</x-slot:id>
                            </x-admin.role.role-table-row>
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
                        <form method="POST" action="{{ route('deleteRole') }}">
                            @csrf
                            <input type="text" id="idToDel" name="roleID" hidden>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.main.main>
