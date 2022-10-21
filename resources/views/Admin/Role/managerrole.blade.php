<x-admin.main.main>
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h3>Role</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Role Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- {{$counter = 1}} -->
                        @foreach ($role as $role)
                        <x-admin.role.role-table-row>
                            <x-slot:counter>{{$counter++}}</x-slot:counter>
                            <x-slot:name>{{$role->RoleName}}</x-slot:name>
                        </x-admin.role.role-table-row>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.main.main>