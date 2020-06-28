@extends('admin.layouts.master')
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
                      <h3 class="name">Selamat Datang Admin</h3>
                     <h3 class="name">{{ Auth::user()->pegawai->nama_lengkap }}</h3>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row top_tiles">
          <div class="animated flipInY col-md-4 col-sm-12 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-users"></i></div>
              <div class="count">{{ $users->count() }}</div>
              <h3>Users</h3>
              <p>Jumlah user yang menggunakan aplikasi SIPJABS</p>
              <hr>
              <div class="text-center small-box">
                <a href="{{ route('admin.users.index') }}" class="small-box-footer">Tampilkan lebih banyak <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="animated flipInY col-md-4 col-sm-12 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-database"></i></div>
              <div class="count">{{ $pegawai->count() }}</div>
              <h3>Pegawai</h3>
              <p>Jumlah seluruh pegawai di Universitas Telkom baik Dosen maupun TPA</p>
              <hr>
              <div class="text-center small-box">
                <a href="{{ route('admin.pegawai.index') }}" class="small-box-footer">Tampilkan lebih banyak <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="animated flipInY col-md-4 col-sm-12 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-list"></i></div>
              <div class="count">{{ $tallent->count() }}</div>
              <h3>Kandidat</h3>
              <p>Jumlah seluruh kandidat yang terpilih oleh semua user dan akan diajukan untuk penilaian</p>
              <hr>
              <div class="text-center small-box">
                <a href="{{ route('admin.tallent.index') }}" class="small-box-footer">Tampilkan lebih banyak <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row top_tiles">
          <div class="animated flipInY col-md-4 col-sm-12 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-credit-card"></i></div>
              <div class="count">{{ $unitkerja->count() }}</div>
              <h3>Unit Kerja</h3>
              <p>Jumlah seluruh unit kerja di Universitas Telkom</p>
              <hr>
              <div class="text-center small-box">
                <a href="{{ route('admin.unitkerja.index') }}" class="small-box-footer">Tampilkan lebih banyak <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="animated flipInY col-md-4 col-sm-12 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-credit-card"></i></div>
              <div class="count">{{ $jabatan->count() }}</div>
              <h3>Jabatan</h3>
              <p>Jumlah seluruh jabatan di Universitas Telkom</p>
              <hr>
              <div class="text-center small-box">
                <a href="{{ route('admin.jabatan.index') }}" class="small-box-footer">Tampilkan lebih banyak <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="animated flipInY col-md-4 col-sm-12 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-credit-card"></i></div>
              <div class="count">{{ $unitbagian->count() }}</div>
              <h3>Unit Bagian</h3>
              <p>Jumlah seluruh unit bagian di Universitas Telkom</p>
              <hr>
              <div class="text-center small-box">
                <a href="{{ route('admin.unitbagian.index') }}" class="small-box-footer">Tampilkan lebih banyak <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row top_tiles">
          <div class="animated flipInY col-md-4 col-sm-12 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-graduation-cap"></i></div>
              <div class="count">{{ $pendidikan->count() }}</div>
              <h3>Pendidikan</h3>
              <p>Jumlah seluruh pendidikan pegawai</p>
              <hr>
              <div class="text-center small-box">
                <a href="{{ route('admin.pendidikan.index') }}" class="small-box-footer">Tampilkan lebih banyak <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="animated flipInY col-md-4 col-sm-12 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-certificate"></i></div>
              <div class="count">{{ $skill->count() }}</div>
              <h3>Skill</h3>
              <p>Jumlah seluruh skill pegawai</p>
              <hr>
              <div class="text-center small-box">
                <a href="{{ route('admin.skill.index') }}" class="small-box-footer">Tampilkan lebih banyak <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="animated flipInY col-md-4 col-sm-12 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-briefcase"></i></div>
              <div class="count">{{ $personalquality->count() }}</div>
              <h3>Personal Quality</h3>
              <p>Jumlah seluruh personal quality pegawai</p>
              <hr>
              <div class="text-center small-box">
                <a href="{{ route('admin.personalquality.index') }}" class="small-box-footer">Tampilkan lebih banyak <i class="fa fa-arrow-circle-right"></i></a>
              </div>
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
                    <p>Jabatan baru : {{ $tl->posisikosong->jabatanstruktural->jabatan->nama_jabatan }} {{ $tl->posisikosong->jabatanstruktural->unitkerja->nama_unitkerja }}</p>
                  </div>
                </article>

                @endforeach
              </div>
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
                <p>©2020 Direktorat Sumber Daya Manusia Universitas Telkom</p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection