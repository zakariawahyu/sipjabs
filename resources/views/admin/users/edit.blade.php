      <div role="main">
        <div class="">
          <div class="page-title">

          <div class="clearfix"></div>
          <div class="row">
  
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">

                <div class="x_title">
                  <h2>Form Edit Profile</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                          class="fa fa-wrench"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="form-horizontal form-label-left"  enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="username" value="{{ $user->username }}" value="{{ old('username') }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="email" value="{{ $user->email }}" value="{{ old('email') }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="role" class="form-control col-md-7 col-xs-12">
                              <option value="user" @if ($user->role == 'user')
                                  selected
                              @endif>User</option>
                              <option value="admin" @if ($user->role == 'admin')
                                  selected
                              @endif>Admin</option>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                  </form>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>