<x-admin.main.main>
    <!-- Form Start -->
    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3><a href="{{ url('admin/product') }}"><button type="button" class="btn btn-outline-primary m-2"><i
                            class="fa fa-home me-2"></i>Back</button></a></h3>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3>Edit Product</h3>
        </div>
        <form method="POST" action="{{ route('editProduct') }}" enctype="multipart/form-data">
            @csrf
            <input type="text" name="productID" value="{{ $product->ProductID }}" hidden>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="productName" name="productName"
                    value="{{$product->ProductName}}">
                <label for="floatingText">Product Name</label>
            </div>
            <div class="form-floating mb-4">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" id="brand"
                    name="brand">
                    <option selected>Open this select menu brand</option>
                    @foreach ($brands as $brand)
                        <option value="{{$brand->BrandID}}" {{$brand->BrandID == $product->BrandID ? 'selected' :
                            ''}}>{{$brand->BrandName}}</option>
                    @endforeach
                </select>
                <label for="floatingSelect">Brand</label>
            </div>
            <div class="form-floating mb-4">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" id="strap"
                    name="strap">
                    <option selected>Open this select menu Strap</option>
                    @foreach ($straps as $strap)
                        <option value="{{$strap->StrapID}}" {{$strap->StrapID == $product->StrapID ? 'selected' :
                            ''}}>{{$strap->StrapName}}</option>
                    @endforeach
                </select>
                <label for="floatingSelect">Strap</label>
            </div>
            <div class="form-floating mb-3">
                <input type="txt" class="form-control" id="price" name="price" value="{{$product->Price}}">
                <label for="floatingInput">Price</label>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Image Product :</label>
                <input class="form-control" type="file" id="imega" name="image" multiple>
            </div>
            <div class="form-floating mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                        style="height: 150px;"></textarea>
                    <label for="floatingTextarea">Contents</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Edit</button>
        </form>
    </div>
    <!-- Form End -->
</x-admin.main.main>