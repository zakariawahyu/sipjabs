@extends('admin.layouts.master')

@section('title', 'Tambah Jabatan Struktural')

@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tambah Jabatan Struktural</h3>
              </div>

              <div class="title_right">
              <div class="col-md-4 col-sm-4 col-xs-8 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Tambah Jabatan Struktural</li>
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
                    <h2>Form Tambah Jabatan Struktural</h2>
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
                      <form action="{{ route('admin.jabatanstruktural.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Unit Kerja</label>
                            <select class="form-control select2" name="unitkerja">
                                    <option value="" selected disabled>Pilih Unitkerja</option>
                                @foreach ($unitkerja as $uk)
                                    <option value="{{ $uk->id }}">{{ $uk->nama_unitkerja }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <select class="form-control select2" name="jabatan">
                                    <option value="" selected disabled>Pilih Jabatan</option>
                                @foreach ($jabatan as $jb)
                                    <option value="{{ $jb->id }}">{{ $jb->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Unit Bagian</label>
                            <select class="form-control select2" name="unitbagian">
                                    <option value="" selected disabled>Pilih Unit Bagian</option>
                                @foreach ($unitbagian as $ub)
                                    <option value="{{ $ub->id }}">{{ $ub->nama_unitbagian }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                          <label>Formasi Jabatan</label>
                          <input type="text" class="form-control" name="formasi" placeholder="Masukkan jumlah formasi">
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