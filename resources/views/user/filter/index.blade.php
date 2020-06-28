@extends('user.layouts.master')

@section('title', 'SIPJABS | Cari Kandidat')
 
@section('content')
    <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Cari Kandidat</h3>
            </div>

            <div class="title_right">
              <div class="col-md-4 col-sm-4 col-xs-12 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Cari Kandidat</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-2"></div>
            <div class="col-md-8 col-sm-12 col-xs-12">
              <div class="x_panel">

                <div class="x_title">
                  <h2>Form Filter Kandidat<small> | Menentukan jabatan baru yang inigin dicari</small></h2>
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
                  {{-- Form Filter Utama --}}
                  <form  class="form-horizontal form-label-left" action="{{ route('filtertallent') }}" method="GET">
                    @csrf
                    <p class="text-center">Jabatan dituju / Posisi target</p>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit Kerja</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="unitkerja" class="form-control dynamic select2" data-dependent="jabatan">
                            <option disabled selected value>Pilih Unit Kerja</option>
                            @foreach ($unitkerja as $uk)
                                <option value="{{ $uk->id }}">{{ $uk->nama_unitkerja }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="jabatan" class="form-control dynamic select2" data-dependent="unitbagian">
                            <option disabled selected value>Pilih Jabatan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit Bagian</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="jabatanstruktural" id="unitbagian" class="form-control dynamic select2" data-dependent="jabatanstruktural">
                            <option disabled selected value>Pilih Unit Bagian</option>
                        </select>
                      </div>
                    </div>
                    <hr>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                       <button class="btn btn-primary">Cari</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2"></div>
          </div>

          <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-2"></div>
            <div class="col-md-8 col-sm-12 col-xs-12">
              <div class="x_panel">

                <div class="x_title">
                  <h2>Status Jabatan Baru<small> | Data Jabatan Baru yang belum terpenuhi oleh kandidat</small></h2>
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
                  <table id="datatable" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Unit Kerja</th>
                        <th>Jabatan</th>
                        <th>Unit Bagian</th>
                        <th>Tanggal Penetapan</th>
                        <th style="width: 30%;" class="text-center">Status Filtering</th>
                      </tr>
                      
                    </thead>
                    <tbody>
                      @php
                          $no = 1;
                      @endphp
                      @foreach ($posisikosong as $item)
                      <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $item->jabatanstruktural->unitkerja->nama_unitkerja }}</td>
                          <td>{{ $item->jabatanstruktural->jabatan->nama_jabatan }}</td>
                          <td>{{ $item->jabatanstruktural->unitbagian->nama_unitbagian }}</td>
                          <td>{{ $item->created_at->diffForHumans() }}</td>
                          <td class="text-center">
                            @if ($item->status_posisi == "Belum Terpenuhi")
                              <a href="#" class="btn btn-danger btn-xs"> {{ $item->status_posisi }}</a>
                              <a href="#" class="btn btn-primary btn-xs disabled"><i class="fa fa-eye"></i> View Kandidat</a>
                            @elseif ($item->status_posisi == "Sudah Terpenuhi")
                              <a href="#" class="btn btn-success btn-xs"> {{ $item->status_posisi }}</a>
                              <a href="{{ route('user.tallent.index') }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> View Kandidat</a>
                            @endif
                          </td>
                      </tr>
                      @endforeach
                     

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2"></div>
          </div>



        </div>

      </div>
@endsection