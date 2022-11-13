<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="dashboard" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Watch</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ url('admin/product') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Product</a>
            <a href="{{ url('admin/brand') }}" class="nav-item nav-link"><i class="fa fa-copyright me-2"></i>Brand</a>
            <a href="{{ url('admin/strap') }}" class="nav-item nav-link"><i class="fa fa-equals me-2"></i>Strap</a>
            <a href="{{ url('admin/order') }}" class="nav-item nav-link"><i class="fa fa-file-invoice me-2"></i>Order</a>
            <a href="{{ url('admin/user') }}" class="nav-item nav-link"><i class="fa fa-user me-2"></i></i>User</a>
            <a href="{{ url('admin/import') }}" class="nav-item nav-link"><i class="fa fa-warehouse me-2"></i>Import</a>
            <a href="{{ url('admin/import-history') }}" class="nav-item nav-link"><i class="fa fa-warehouse me-2"></i>Import history</a>
            <a href="{{ url('admin/staff') }}" class="nav-item nav-link"><i class="fa fa-user-tie me-2"></i>Staff</a>
            <a href="{{ url('admin/role') }}" class="nav-item nav-link"><i class="fa fa-user-tag me-2"></i>Role</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->