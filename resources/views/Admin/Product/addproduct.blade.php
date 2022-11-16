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
            <h3><a href="product"><button type="button" class="btn btn-outline-primary m-2"><i
                            class="fa fa-home me-2"></i>Back</button></a></h3>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3>Add Product</h3>
        </div>
        <form method="POST" action="{{ route('addProduct') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="productname" name="productName"
                    placeholder="Product name">
                <label for="floatingText">Product Name</label>
            </div>
            <div class="form-floating mb-4">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                    id="brand" name="brand">
                    <option selected disabled>Open this select menu brand</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->BrandID }}">{{ $brand->BrandName }}</option>
                    @endforeach
                </select>
                <label for="floatingSelect">Brand</label>
            </div>
            <div class="form-floating mb-4">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                    id="strap" name="strap">
                    <option selected disabled>Open this select menu Strap</option>
                    @foreach ($straps as $strap)
                        <option value="{{ $strap->StrapID }}">{{ $strap->StrapName }}</option>
                    @endforeach
                </select>
                <label for="floatingSelect">Strap</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="price" name="price">
                <label for="floatingInput">Price</label>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Image Product:</label>
                <input class="form-control" type="file" id="image" name="image" multiple>
            </div>
            <div class="form-floating mb-3">
                <div class="form-floating">
                    <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea"
                        style="height: 150px;"></textarea>
                    <label for="floatingTextarea">Description</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">ADD</button>
        </form>
    </div>
    <!-- Form End -->
</x-admin.main.main>
