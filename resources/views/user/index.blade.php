@extends('user.layouts.master')

@section('title', 'SIPJABS | Dashboard')

@section('content')
      <div class="right_col" role="main">
        <div class="row">
          <div class="ccol-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content text-center">
                <div class="flex">
                  <ul class="list-inline widget_profile_box">
                    <li>
                      <a>
                        <i class="fa fa-lock"></i>
                      </a>
                    </li>
                    <li>
                      <img src="{{ asset('asset/images/user.png') }}" alt="..." class="img-circle profile_img">
                    </li>
                    <li>
                      <a>
                        <i class="fa fa-lock"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="flex">
                  <ul class="list-inline count2">
                    <li>
                      <h3 class="name">Selamat Datang</h3>
                     <h3 class="name">{{ Auth::user()->pegawai->nama_lengkap }}</h3>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row top_tiles">
          <div class="animated flipInY col-md-4 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-users"></i></div>
              <div class="count">{{ $users->count() }}</div>
              <h3>Users</h3>
              <p>Jumlah user yang menggunakan aplikasi ini.</p>
            </div>
          </div>
          <div class="animated flipInY col-md-4 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-database"></i></div>
              <div class="count">{{ $pegawai->count() }}</div>
              <h3>Pegawai</h3>
              <p>Jumlah seluruh pegawai di Universitas Telkom.</p>
            </div>
          </div>
          <div class="animated flipInY col-md-4 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-list"></i></div>
              <div class="count">{{ $tallent->count() }}</div>
              <h3>Tallent</h3>
              <p>Jumlah seluruh tallent yang terpilih.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="ccol-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content text-center">
                <h1><i class="fa fa-magnet"></i> SIPJABS</h1>
                <p>Sistem Pengawakan Jabatan Struktural</p>
                <p></p>
                <p>©2020 Direktorat Sumber Daya Manusia Telkom University</p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection