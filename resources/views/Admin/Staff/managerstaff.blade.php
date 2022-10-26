<x-admin.main.main>
            <div class="container-fluid pt-4 px-4">
                <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3>Staff</h3>  
                            <a href="staff/add"><button type="button" class="btn btn-success">Add</button></a>
                        </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Button</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($staffs as $staff)
                                    <x-admin.staff.staff-table-row>
                                    <x-slot:id>{{$staff->StaffID}}</x-slot:id>
                                    <x-slot:username>{{$staff->Username}}</x-slot:username>
                                    <x-slot:password>{{$staff->Password}}</x-slot:password>
                                    <x-slot:role>{{$staff->role->RoleName}}</x-slot:role>
                                    <x-slot:fullname>{{$staff->Fullname}}</x-slot:fullname>
                                    <x-slot:status>{{$staff->Status === 1 ? 'Open' : 'Lock'}}</x-slot:status>
                                    </x-admin.brand.brand-table-row>
                                 @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
</div>
</x-admin.main.main>           
