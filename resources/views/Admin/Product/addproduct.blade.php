<x-admin.main.main>
    <!-- Form Start -->
    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3><a href="managerproduct"><button type="button" class="btn btn-outline-primary m-2"><i
                            class="fa fa-home me-2"></i>Back</button></a></h3>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3>Add Product</h3>
        </div>
        <div class="form-floating mb-4">
            <input type="text" class="form-control" id="productname" name="productname" placeholder="Product name">
            <label for="floatingText">Product Name</label>
        </div>
        <div class="form-floating mb-4">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" id="brand"
                name="brand">
                <option selected>Open this select menu brand</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <label for="floatingSelect">Brand</label>
        </div>
        <div class="form-floating mb-4">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" id="strap"
                name="strap">
                <option selected>Open this select menu Strap</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <label for="floatingSelect">Strap</label>
        </div>
        <div class="form-floating mb-3">
            <input type="txt" class="form-control" id="price" name="price" placeholder="Nguyen Van A">
            <label for="floatingInput">Price</label>
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Imega Product :</label>
            <input class="form-control" type="file" id="imega" name="image" multiple>
        </div>
        <div class="form-floating mb-3">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                    style="height: 150px;"></textarea>
                <label for="floatingTextarea">Contents</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">ADD</button>
    </div> --}}
    <!-- Form End -->
</x-admin.main.main>