@extends('admin.layouts.master')

@section('title', 'SIPJABS | Detail Pegawai')

@section('content')
    <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Detail Pegawai</h3>
            </div>

            <div class="title_right">
              <div class="col-md-3 col-sm-3 col-xs-8 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Detail Pegawai</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Pegawai <small>{{ $pegawai->nama_lengkap }}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Detail Pegawai</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Pendidikan</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Skill</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="text-center">
                                @if ($pegawai->jenis_kelamin == "L")
                                    <img src="{{ asset('asset/images/male.png') }}" class="img-circle">
                                @else
                                    <img src="{{ asset('asset/images/female.png') }}" class="img-circle">
                                @endif
                                <h3 class="profile-username text-center">DATA PRIBADI</h3>
                                <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-3 col-sm-3">

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                     <table class="table table-hover">
                                <tr>
                                  <td>Nama Lengkap</td>
                                  <td>:</td>
                                  <td>{{ $pegawai->nama_lengkap }}</td>
                                </tr>
                                <tr>
                                  <td>NIP</td>
                                  <td>:</td>
                                  <td>{{ $pegawai->nip }}</td>
                                </tr>
                                <tr>
                                  <td>Jabatan</td>
                                  <td>:</td>
                                  <td>{{ $pegawai->jabatanstruktural->jabatan->nama_jabatan }} {{ $pegawai->jabatanstruktural->unitbagian->nama_unitbagian }}</td>
                                </tr>
                                <tr>
                                  <td>Status Pegawai</td>
                                  <td>:</td>
                                  <td>{{ $pegawai->status_pegawai }}</td>
                                </tr>
                                <tr>
                                  <td>Tempat Lahir</td>
                                  <td>:</td>
                                  <td>{{ $pegawai->ttl }}</td>
                                </tr>
                                <tr>
                                  <td>Tanggal Lahir</td>
                                  <td>:</td>
                                  <td>{{ $pegawai->ttl }}</td>
                                </tr>
                                <tr>
                                  <td>Status Perkawinan</td>
                                  <td>:</td>
                                  <td>{{ $pegawai->status_perkawinan }}</td>
                                </tr>
                                <tr>
                                  <td>Golongan Darah</td>
                                  <td>:</td>
                                  <td>{{ $pegawai->gol_darah }}</td>
                                </tr>
                                <tr>
                                  <td>Jenis Kelamin</td>
                                  <td>:</td>
                                  <td>{{ $pegawai->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                  <td>Agama</td>
                                  <td>:</td>
                                  <td>{{ $pegawai->agama }}</td>
                                </tr>
                                <tr>
                                  <td>Tinggi Badan</td>
                                  <td>:</td>
                                  <td>{{ $pegawai->tinggi_badan }} cm</td>
                                </tr>
                                <tr>
                                  <td>Berat Badan</td>
                                  <td>:</td>
                                  <td>{{ $pegawai->berat_badan }} kg</td>
                                </tr>
                                <tr>
                                  <td>Alamat</td>
                                  <td>:</td>
                                  <td>{{ $pegawai->alamat }}</td>
                                </tr>
                              </table>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">

                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="text-center">
                                 @if ($pegawai->jenis_kelamin == "L")
                                    <img src="{{ asset('asset/images/male.png') }}" class="img-circle">
                                @else
                                    <img src="{{ asset('asset/images/female.png') }}" class="img-circle">
                                @endif
                                <h3 class="profile-username text-center">DATA PENDIDIKAN</h3>
                                <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <table class="table table-hover text-center">
                                @foreach ($pegawai->riwayatpendidikan as $rp)
                                <tr>
                                   <td>{{ $rp->pendidikan->jenjang_pendidikan }} {{ $rp->pendidikan->jurusan }}</td>
                                </tr>
                                @endforeach
                              </table>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">

                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="text-center">
                                 @if ($pegawai->jenis_kelamin == "L")
                                    <img src="{{ asset('asset/images/male.png') }}" class="img-circle">
                                @else
                                    <img src="{{ asset('asset/images/female.png') }}" class="img-circle">
                                @endif
                                <h3 class="profile-username text-center">SKILL PEGAWAI</h3>
                                <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <table class="table table-hover text-center">
                                @foreach ($pegawai->skillpegawai as $sk)
                                <tr>
                                   <td>{{ $sk->skill->nama_skill }}</td>
                                </tr>
                                @endforeach
                              </table>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
@endsection