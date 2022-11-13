<x-client.main.main>
  <div id="all">
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- breadcrumb-->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">New account / Sign in</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6">
            <div class="box">
              <h1>New account</h1>
              <p class="lead">Not our registered customer yet?</p>
              <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The
                whole process will not take you more than a minute!</p>
              <p class="text-muted">If you have any questions, please feel free to <a href="contact">contact us</a>, our
                customer service center is working for you 24/7.</p>
              <hr>
              <form action="{{ route('registerUser') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="username">Username</label>
                  @error('username')
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
                <div class="form-group">
                  <label for="password_confirmation">Confirm Password</label>
                  <input id="password_confirmation" type="password" name="password_confirmation" class="form-control">
                </div>
                <div class="form-group">
                  <label for="fullname">Full Name</label>
                  @error('fullname')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <input id="fullname" type="text" name="fullname" class="form-control">
                </div>
                <div class="form-group">
                  <label for="birthdate">Birthdate</label>
                  @error('birthdate')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <input id="birthdate" type="date" name="birthdate" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  @error('phone')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <input id="phone" type="number" name="phone" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Address</label>
                  @error('address')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <input id="address" type="text" name="address" class="form-control">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box">
              <h1>Login</h1>
              <p class="lead">Already our customer?</p>
              <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <hr>
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
                <div class="text-center">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-client.main.main>