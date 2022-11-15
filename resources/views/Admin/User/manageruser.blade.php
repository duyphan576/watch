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
                <h3>User</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Status</th>
                            <th scope="col">Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <form action="{{ url('admin/user/update') }}" method="POST">
                            <input type="text" name="userID" value="{{ $user->UserID }}" hidden>
                            @csrf
                            <tr>
                                <th scope="row"># {{ $user->UserID }}</th>
                                <td>{{ $user->Username }}</td>
                                <td>{{ $user->Fullname }}</td>
                                <td>{{ $user->Birthday }}</td>
                                <td>{{ $user->Phone }}</td>
                                <td>
                                    <select class="form-select" aria-label="Floating label select example"
                                        id="status" name="status">
                                        <option value="1" {{ $user->Status == 1 ? 'selected' : '' }}>Open</option>
                                        <option value="0" {{ $user->Status == 0 ? 'selected' : '' }}>Lock</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href=""><button type="button" class="btn btn-success">Password</button></a>
                                        <button type="submit" class="btn btn-warning">Status</button>
                                    </div>
                                </td>
                            </tr>
                        </form>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.main.main>