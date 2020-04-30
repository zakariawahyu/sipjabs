@extends('admin.layouts.master')

@section('title', 'Tambah Users')

@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tambah Users</h3>
              </div>

              <div class="title_right">
              <div class="col-md-3 col-sm-3 col-xs-8 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Tambah Users</li>
                </ol>
              </div>
            </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
            <div class="col-md-3 col-sm-3"></div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Plain Page</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Pegawai</label>
                            <select class="form-control select2" name="id_pegawai">
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" required class="form-control" placeholder="Masukkan username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" required class="form-control" placeholder="Masukkan password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" required class="form-control" placeholder="Masukkan email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">Role</label>
                            <select name="role" class="form-control select2">
                                <option disabled selected>Pilih Role</option>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-3"></div>
            </div>
          </div>
        </div>
@endsection