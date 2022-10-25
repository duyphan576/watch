<x-admin.main.main>
    <!-- Form Start -->
    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3>Edit Role</h3>
            <a href="{{ url('admin/role') }}"><button type="button" class="btn btn-outline-primary m-2"><i
                        class="fa fa-home me-2"></i>Back</button></a>
        </div>
        <form method="POST" action="{{ route('editRole') }}" enctype="multipart/form-data">
            @csrf
            <input type="text" name="roleID" value="{{ $role->RoleID }}" hidden>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="roleName" name="roleName"
                    value="{{ $role->RoleName }}">
                <label for="floatingText">Role Name</label>
            </div>
            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Edit</button>
        </form>
    </div>
    <!-- Form End -->
</x-admin.main.main>
