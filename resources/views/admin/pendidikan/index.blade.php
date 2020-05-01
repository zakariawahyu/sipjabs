@extends('admin.layouts.master')

@section('title', 'SIPJABS | Data Pendidikan')

@section('content')
    <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Pendidikan</h3>
            </div>

            <div class="title_right">
              <div class="col-md-3 col-sm-3 col-xs-8 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Pendidikan</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <a href="{{ route('admin.pendidikan.create') }}" title="Tambah Data Pendidikan" class="btn btn-info pull-right btn-add-pendidikan"><i class="fa fa-plus-circle"></i> Tambah Pendidikan</a>
              <div class="x_panel">

                <div class="x_title">
                  <h2>Data Pendidikan</h2>
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
                  <table id="datatablependidikan" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 5%">No</th>
                        <th>Jenjang Pendidikan</th>
                        <th>Jurusan</th>
                        <th style="width: 20%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $no = 1;
                      @endphp
                      @foreach ($pendidikan as $pk)
                          <tr>
                            <td>{{$no++ }}</td>
                            <td>{{ $pk->jenjang_pendidikan }}</td>
                            <td>{{ $pk->jurusan }}</td>
                            <td class="text-center">
                              <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                              <a href="{{ route('admin.pendidikan.delete', $pk->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
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