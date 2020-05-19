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
                      @if (Auth::user()->url_foto =='')
                      <img src="{{ asset('asset/images/user.png') }}" alt="..." class="img-circle profile_img">
                    @else
                      <img src="{{ asset('asset/images/'.Auth::user()->url_foto) }}" alt="..." class="img-circle profile_img">
                    @endif
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
                      <h3 class="name">Selamat Datang User</h3>
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
              <p>Jumlah users yang menggunakan aplikasi SIPJABS</p>
              <hr>
            </div>
          </div>
          <div class="animated flipInY col-md-4 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-database"></i></div>
              <div class="count">{{ $pegawai->count() }}</div>
              <h3>Pegawai</h3>
              <p>Jumlah seluruh pegawai di Universitas Telkom baik Dosen maupun TPA</p>
              <hr>
            </div>
          </div>
          <div class="animated flipInY col-md-4 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-list"></i></div>
              <div class="count">{{ $tallent->count() }}</div>
              <h3>Kandidat</h3>
              <p>Jumlah seluruh kandidat yang terpilih oleh {{ Auth::user()->username }} dan akan diajukan untuk penilaian</p>
              <hr>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Data Kandidat <small>| Pegawai terpilih : {{ $tallent->count() }}</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                        class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">

                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content scroll-page">
                @foreach ($tallent as $tl)
                
                <article class="media event">
                  <a class="pull-left date">
                    @if ($tl->pegawai->jenis_kelamin == 'L')
                        <img src="{{ asset('asset/images/male.png') }}" alt="" class="img-circle img-responsive">
                      @else
                        <img src="{{ asset('asset/images/female.png') }}" alt="" class="img-circle img-responsive">
                      @endif
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">{{ $tl->pegawai->nama_lengkap }} | {{ $tl->pegawai->nip }}</a>
                    <p>Jabatan lama : {{ $tl->pegawai->jabatanstruktural->jabatan->nama_jabatan }} {{ $tl->pegawai->jabatanstruktural->unitkerja->nama_unitkerja }}</p>
                    <p>Jabatan baru : {{ $tl->jabatanstruktural->jabatan->nama_jabatan }} {{ $tl->jabatanstruktural->unitkerja->nama_unitkerja }}</p>
                  </div>
                </article>

                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content text-center">
                <h1><i class="fa fa-magnet"></i> SIPJABS</h1>
                <p>Sistem Pengawakan Jabatan Struktural</p>
                <p></p>
                <p>©2020 Direktorat Sumber Daya Manusia Universitas Telkom</p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection