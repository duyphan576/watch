<x-admin.main.main>
    <!-- Form Start -->
    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3>Edit Strap</h3>
            <a href="{{ url('admin/role') }}"><button type="button" class="btn btn-outline-primary m-2"><i
                        class="fa fa-home me-2"></i>Back</button></a>
        </div>
        <form method="POST" action="{{ route('editStrap') }}" enctype="multipart/form-data">
            @csrf
            <input type="text" name="strapID" value="{{ $strap->StrapID }}" hidden>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="strapName" name="strapName"
                    value="{{ $strap->StrapName }}">
                <label for="floatingText">Strap Name</label>
            </div>
            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Edit</button>
        </form>
    </div>
    <!-- Form End -->
</x-admin.main.main>
