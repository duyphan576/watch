<x-admin.main.main>
    <!-- Form Start -->
    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3><a href="strap"><button type="button" class="btn btn-outline-primary m-2"><i
                            class="fa fa-home me-2"></i>Back</button></a></h3>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3>Add Strap</h3>
        </div>
        <form action="{{ route('addStrap') }}" method="post">
            @csrf
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="straptname" name="strapName">
                <label for="floatingText">Strap Name</label>
            </div>
            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Add</button>
        </form>
    </div>
    <!-- Form End -->
</x-admin.main.main>