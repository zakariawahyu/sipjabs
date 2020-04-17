@extends('admin.layouts.master')

@section('title', 'SIPJABS | Profile')

@section('content')
     <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Profile</h3>
            </div>

            <div class="title_right">
              <div class="col-md-2 col-sm-2 col-xs-8 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Profile</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-2"></div>
            <div class="col-md-8 col-sm-12 col-xs-12">
              <a href="#" class="btn btn-danger pull-right"><i class="fa fa-key"></i> Reset Password</a>
              <a href="#" class="btn btn-info pull-right"><i class="fa fa-edit"></i> Edit Profile</a>
              <div class="x_panel">

                <div class="x_title">
                  <h2>Profilku</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                          class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <div class="text-center">
                    <img src="{{ asset('asset/images/user.png') }}" class="img-circle">
                  </div>
                  <h3 class="profile-username text-center">{{ Auth::user()->role }}</h3>
                  <strong>Nama Lengkap</strong>
                  <p class="text-muted">{{ $user->nama_lengkap }}</p>
                  <hr>
                  <strong>Username</strong>
                  <p class="text-muted">{{ $user->username }}</p>
                  <hr>
                  <strong>Email</strong>
                  <p class="text-muted">{{ $user->email }}</p>
                  <hr>
                  <strong>Status Pegawai</strong>
                  <p class="text-muted">{{ $user->status_pegawai }}</p>
                  <hr>
                  <strong>Unit Kerja</strong>
                  <p class="text-muted">{{ $user->nama_unitkerja }}</p>
                  <hr>
                  <strong>Jabatan</strong>
                  <p class="text-muted">{{ $user->nama_jabatan }} {{ $user->nama_unitbagian }}</p>
                  <hr>
                  <strong>NIP</strong>
                  <p class="text-muted">{{ $user->nip }}</p>
                  <hr>
                </div>

              </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2"></div>
          </div>
        </div>

      </div>
@endsection