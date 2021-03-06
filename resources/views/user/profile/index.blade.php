@extends('user.layouts.master')

@section('title', 'SIPJABS | Profile')

@section('content')
     <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Profile</h3>
            </div>

            <div class="title_right">
              <div class="col-md-2 col-sm-2 col-xs-12 pull-right">
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
              <a href="{{ route('user.profile.show', Auth::user()->id) }}" title="Reset Password" class="btn btn-danger pull-right btn-reset-pass"><i class="fa fa-key"></i> Reset Password</a>
              <a href="{{ route('user.profile.edit', Auth::user()->id) }}" title="Edit Profile" class="btn btn-info pull-right btn-edit-user"><i class="fa fa-edit"></i> Edit Profile</a>
              <div class="x_panel">

                <div class="x_title">
                  <h2>Profile</h2>
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
                  <div class="text-center">
                    @if (Auth::user()->url_foto =='')
                      <img src="{{ asset('asset/images/user.png') }}" class="img-circle">
                    @else
                      <img src="{{ asset('asset/images/'.Auth::user()->url_foto) }}" class="img-circle">
                    @endif
                  </div>
                  <h3 class="profile-username text-center">{{ Auth::user()->role }}</h3>
                  <strong>Nama Lengkap</strong>
                  <p class="text-muted">{{ $user->pegawai->nama_lengkap }}</p>
                  <hr>
                  <strong>Username</strong>
                  <p class="text-muted">{{ $user->username }}</p>
                  <hr>
                  <strong>Email</strong>
                  <p class="text-muted">{{ $user->email }}</p>
                  <hr>
                  <strong>Status Pegawai</strong>
                  <p class="text-muted">{{ $user->pegawai->status_pegawai }}</p>
                  <hr>
                  <strong>Unit Kerja</strong>
                  <p class="text-muted">{{ $user->pegawai->jabatanstruktural->unitkerja->nama_unitkerja }}</p>
                  <hr>
                  <strong>Jabatan</strong>
                  <p class="text-muted">{{ $user->pegawai->jabatanstruktural->jabatan->nama_jabatan }} {{ $user->pegawai->jabatanstruktural->unitbagian->nama_unitbagian }}</p>
                  <hr>
                  <strong>NIP</strong>
                  <p class="text-muted">{{ $user->pegawai->nip }}</p>
                  <hr>
                </div>

              </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2"></div>
          </div>
        </div>

      </div>
@endsection