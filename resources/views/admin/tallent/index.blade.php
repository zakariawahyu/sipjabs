@extends('admin.layouts.master')

@section('title', 'SIPJABS | Data Kandidat')

@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Kandidat</h3>
              </div>

              <div class="title_right">
              <div class="col-md-3 col-sm-3 col-xs-12 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Kandidat</a></li>
                </ol>
              </div>
            </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Kandidat <small>| Data kandidat yang sudah terpilih dan akan diajukan untuk penilaian kepada tim penilaian
</small></h2>
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
                    <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Jabatan baru</th>
                        <th>Jumlah Kandidat</th>
                        <th style="width: 20%;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $no = 1;
                      @endphp

                      @foreach ($tallents as $tl)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $tl->posisikosong->jabatanstruktural->jabatan->nama_jabatan }} {{ $tl->posisikosong->jabatanstruktural->unitbagian->nama_unitbagian }}</td>
                        <td>{{ $tl->count }} Kandidat</td>
                        <td class="text-center">
                          <a href="{{ route('admin.tallent.show', $tl->id_posisikosong) }}" class="btn btn-info btn-show-tallent-admin" title="Nomor Surat {{ $tl->nomor_surat }}"><i class="fa fa-eye"></i> View</a>
                          <a href="{{ route('admin.tallent.cetak', $tl->id_posisikosong) }}" class="btn btn-primary"><i class="fa fa-print"></i> Print PDF</a>
                        </td>
                      </tr>  
                      @endforeach
                      
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection