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
    <!-- Form Start -->
    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3><a href="{{ url('admin/proudct') }}"><button type="button" class="btn btn-outline-primary m-2"><i
                            class="fa fa-home me-2"></i>Back</button></a></h3>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3>Edit Brand Id {{ $brand->BrandID }}</h3>
        </div>
        <form action="{{ route('editBrand') }}" method="post">
            @csrf
            <input type="text" name="BrandID" value="{{ $brand->BrandID }}" hidden>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="brandName" name="brandName" value="{{ $brand->BrandName }}">
                <label for="floatingText">Brand Name</label>
            </div>
            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Edit</button>
        </form>
    </div>
    <!-- Form End -->
</x-admin.main.main>