<!-- navbar-->
<header class="header mb-5">
    <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
    <div id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Offer of the
                        day</a></div>
                <div class="col-lg-6 text-center text-lg-right">
                    @if (Auth::check())
                    <a href="{{ url('customer/order') }}" class="mr-4 text-white">{{ Auth::user()->Fullname }}</a>
                    <a href="{{ route('logoutUser') }}" class="btn btn-danger btn-sm">Logout</a>
                    @else
                    <ul class="menu list-inline mb-0">
                        <li class="list-inline-item"><a href="#" data-toggle="modal"
                                data-target="#login-modal">Login</a></li>
                        <li class="list-inline-item"><a href="register">Register</a></li>
                    </ul>
                    @endif
                </div>
            </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Customer login</h5>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('loginUser') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                @error('fullname')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input id="username" type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input id="password" type="password" name="password" class="form-control">
                            </div>
                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>
                        </form>
                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="{{ url('/register') }}"><strong>Register
                                    now</strong></a>! It is
                            easy and done in 1 minute and gives you access to special discounts and much more!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- *** TOP BAR END ***-->


    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand home">
                <img src="{{ asset('assets/client/img/logo.png') }}" alt="Obaju logo" class="d-none d-md-inline-block">
                <img src="{{ asset('assets/client/img/logo-small.png') }}" alt="Obaju logo" class="d-inline-block d-md-none">
                <span class="sr-only">Obaju - go to homepage</span>
            </a>
            <div class="navbar-buttons">
                <button type="button" data-toggle="collapse" data-target="#navigation"
                    class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i
                        class="fa fa-align-justify"></i></button>
                <button type="button" data-toggle="collapse" data-target="#search"
                    class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i
                        class="fa fa-search"></i></button><a href="basket"
                    class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Product</a></li>
                    <li class="nav-item dropdown">
                        <span href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200"
                            class="dropdown-toggle nav-link">Strap type<b class="caret"></b></span>
                        <div class="dropdown-menu">
                            @foreach (App\Models\Strap::all() as $strap)
                            <a class="dropdown-item" href="{{ url('/category/' . $strap->StrapID) }}">{{
                                $strap->StrapName }}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <span href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200"
                            class="dropdown-toggle nav-link">Brand<b class="caret"></b></span>
                        <div class="dropdown-menu">
                            @foreach (App\Models\Brand::all() as $brand)
                            <a class="dropdown-item" href="{{ url('/category?brand%5B%5D=' . $brand->BrandID) }}">{{
                                $brand->BrandName }}</a>
                            @endforeach
                        </div>
                    </li>

                </ul>
                <div class="navbar-buttons d-flex justify-content-end">
                    <!-- /.nav-collapse-->
                    <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse"
                        href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span
                            class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
                    <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a
                            href="{{ url('cart') }}" class="btn btn-primary navbar-btn"><i
                                class="fa fa-shopping-cart"></i><span>{{Cart::count()}} items in
                                cart</span></a></div>
                </div>
            </div>
        </div>
    </nav>
    <div id="search" class="collapse">
        <div class="container">
            <form role="search" class="ml-auto" action="{{ url('category') }}" method="GET">
                <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control" name="search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>