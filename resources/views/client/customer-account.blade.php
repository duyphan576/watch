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
                <li aria-current="page" class="breadcrumb-item active">My account</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-3">
            <!--
              *** CUSTOMER MENU ***
              _________________________________________________________
              -->
            @include('components/client/customer/customerMenu')
            <!-- /.col-lg-3-->
            <!-- *** CUSTOMER MENU END ***-->
          </div>
          <div class="col-lg-9">
            <div class="box">
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              @if ($message = Session::get('success'))
              <div class="alert alert-success">
                <strong>{{ $message }}</strong>
              </div>
              @endif
              <h1>My account</h1>
              <p class="lead">Change your personal details or your password here.</p>
              <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                egestas.</p>
              <h3>Change password</h3>
              <form method="POST" action="{{ route('changeUserPassword') }}">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="old_password">Old password</label>
                      <input id="old_password" name="old_password" type="password" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="new_password">New password</label>
                      <input id="new_password" name="new_password" type="password" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="new_password_confirmation">Retype new password</label>
                      <input id="new_password_confirmation" name="new_password_confirmation" type="password"
                        class="form-control">
                    </div>
                  </div>
                </div>
                <!-- /.row-->
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save new password</button>
                </div>
              </form>
              <h3 class="mt-5">Personal details</h3>
              <form method="POST" action="{{ route('changeUserInfo') }}">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="fulltname">Fullname</label>
                      <input id="fulltname" name="fullname" type="text" value="{{ Auth::user()->Fullname }}"
                        class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="birtday">Birthday</label>
                      <input id="birthday" name="birthday" type="date" value="{{ Auth::user()->Birthday }}"
                        class="form-control">
                    </div>
                  </div>
                </div>
                <!-- /.row-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input id="phone" name="phone" type="tel" value="{{ Auth::user()->Phone }}" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input id="email" name="email" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-client.main.main>