<x-admin.main.main>
    <!-- Form Start -->
    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3><a href="brand"><button type="button" class="btn btn-outline-primary m-2"><i
                            class="fa fa-home me-2"></i>Back</button></a></h3>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3>Add Brand</h3>
        </div>
        <form action="{{ route('addBrand') }}" method="POST">
            @csrf
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="brandName" name="brandName">
                <label for="floatingText">Brand Name</label>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Image Logo :</label>
                <input class="form-control" type="file" id="image" name="image" multiple>
            </div>
            <div class="form-floating mb-3">
                <input type="txt" class="form-control" id="phonenumber" name="phonenumber" placeholder="xxxxxxxxx">
                <label for="floatingInput">Phone Number</label>
            </div>
            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">ADD</button>
        </form>
    </div>
    <!-- Form End -->
</x-admin.main.main>