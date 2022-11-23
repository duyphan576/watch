<x-admin.main.main>
    <!-- Form Start -->
    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3><a href="{{ url()->previous() }}"><button type="button" class="btn btn-outline-primary m-2"><i
                            class="fa fa-home me-2"></i>Back</button></a></h3>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3>Edit Staff</h3>
        </div>
        <form method="POST" action="{{ route('editStaff') }}">
            @csrf
            <input type="text" name="staffID" value="{{ $staff->StaffID }}" hidden>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="username" name="username"
                    value="{{$staff->Username}}">
                <label for="floatingText">User Name</label>
            </div>
            <div class="form-floating mb-4">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" id="role"
                    name="role">
                    <option selected>Open this select menu role</option>
                    @foreach ($roles as $role)
                        <option value="{{$role->RoleID}}" {{$role->RoleID == $staff->RoleID ? 'selected' :
                            ''}}>{{$role->RoleName}}</option>
                    @endforeach
                </select>
                <label for="floatingSelect">Role</label>
            </div>
            <div class="form-floating mb-3">
                <input type="txt" class="form-control" id="password" name="password">
                <label for="floatingInput">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="txt" class="form-control" id="fullname" name="fullname" value="{{$staff->Fullname}}">
                <label for="floatingInput">Full Name</label>
            </div>
            <div class="form-floating mb-4">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" id="status"name="status">
                                <option value="1"@if ($staff->Status === 1) selected @endif>Open</option>
                                <option value="0"@if ($staff->Status === 0) selected @endif>Lock</option>
                            </select>
                            <label for="floatingInput">Status</label>
                            </div>
            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Edit</button>
        </form>
    </div>
    <!-- Form End -->
</x-admin.main.main>