@extends('admin.layouts.master')

@section('title', 'Edit Pegawai')

@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Pegawai</h3>
              </div>

              <div class="title_right">
              <div class="col-md-3 col-sm-3 col-xs-8 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Edit Pegawai</li>
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
                    <h2>Form Edit Pegawai</h2>
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
                      <form action="{{ route('admin.pegawai.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" required class="form-control" value="{{ $pegawai->nama_lengkap }}" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="">NIP <small>| 8 digit</small></label>
                            <input type="text" required class="form-control" value="{{ $pegawai->nip }}" name="nip">
                        </div>
                        <div class="form-group">
                            <label>Status Pegawai</label>
                            <select class="form-control select2" name="statuspegawai">
                                <option disabled selected>Pilih Status Pegawai</option>
                                @foreach ($statuspegawai as $sp)
                                    <option value="{{ $sp->status_pegawai }}" @if ($sp->status_pegawai == $pegawai->status_pegawai)
                                        selected
                                    @endif>{{ $sp->status_pegawai }}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Unit Kerja</label>
                            <select id="unitkerja" class="form-control dynamic select2" data-dependent="jabatan">
                                <option disabled selected value>Pilih Unit Kerja</option>
                                @foreach ($unitkerja as $uk)
                                    <option value="{{ $uk->id }}" @if ($uk->id == $pegawai->jabatanstruktural->unitkerja->id)
                                        selected
                                    @endif>{{ $uk->nama_unitkerja }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <select id="jabatan" class="form-control dynamic select2" data-dependent="unitbagian">
                                <option disabled selected value>Pilih Jabatan</option>
                                @foreach ($jabatan as $jb)
                                    <option value="{{ $jb->id }}" @if ($jb->id == $pegawai->jabatanstruktural->jabatan->id)
                                        selected
                                    @endif>{{ $jb->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Unit Bagian</label>
                            <select name="jabatanstruktural" id="unitbagian" class="form-control dynamic select2" data-dependent="jabatanstruktural">
                                <option disabled selected value>Pilih Unit Bagian</option>
                                @foreach ($unitbagian as $ub)
                                    <option value="{{ $ub->id }}" @if ($ub->id == $pegawai->jabatanstruktural->unitbagian->id)
                                        selected
                                    @endif>{{ $ub->nama_unitbagian }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jeniskelamin" class="form-control select2">
                                <option disabled selected value>Pilih Jenis Kelamin</option>
                                <option value="L" @if ($pegawai->jenis_kelamin == 'L')
                                    selected
                                @endif>Laki-Laki</option>
                                <option value="P" @if ($pegawai->jenis_kelamin == 'P')
                                    selected
                                @endif>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Tanggal Lahir</label>
                            <input type="text" required class="form-control" value="{{ $pegawai->ttl }}" name="ttl">
                        </div>
                        <div class="form-group">
                            <label for="">Gol Darah</label>
                            <input type="text" required class="form-control" value="{{ $pegawai->gol_darah }}" name="goldarah">
                        </div>
                        <div class="form-group">
                            <label>Status Perkawinan</label>
                            <select name="statusperkawinan" class="form-control select2">
                                <option disabled selected value>Pilih Status Perkawinan</option>
                                <option value="Lajang" @if ($pegawai->status_perkawinan == 'Lajang')
                                    selected
                                @endif>Lajang</option>
                                <option value="Menikah" @if ($pegawai->status_perkawinan == "Menikah")
                                    selected
                                @endif>Menikah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <input type="text" required class="form-control" value="{{ $pegawai->agama }}" name="agama">
                        </div>
                        <div class="form-group">
                            <label for="">Tinggi Badan</label>
                            <input type="text" required class="form-control" value="{{ $pegawai->tinggi_badan }}" name="tinggibadan">
                        </div>
                        <div class="form-group">
                            <label for="">Berat Badan</label>
                            <input type="text" required class="form-control" value="{{ $pegawai->berat_badan }}" name="beratbadan">
                        </div>
                        <div class="form-group">
                            <label for="">Masa Kerja<small> | Tahun</small></label>
                            <input type="text" required class="form-control" value="{{ $pegawai->masa_kerja }}" name="mk">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" required class="form-control" value="{{ $pegawai->alamat }}" name="alamat">
                        </div>
                        <div class="form-group">
                            <label>Pelanggaran Kode Etik</label>
                            <select name="kodeetik" class="form-control select2">
                                <option disabled selected value>Pilih Pelanggaran</option>
                                <option value="Ya" @if ($pegawai->kode_etik == 'Ya')
                                    selected
                                @endif>Ya</option>
                                <option value="Tidak" @if ($pegawai->kode_etik == 'Tidak')
                                    selected
                                @endif>Tidak</option>
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