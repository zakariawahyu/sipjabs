@extends('admin.layouts.master')

@section('title', 'SIPJABS | Data Unit Kerja')

@section('content')
    <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Unit Kerja</h3>
            </div>

            <div class="title_right">
              <div class="col-md-3 col-sm-3 col-xs-12 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Unit Kerja</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <a href="{{ route('admin.unitkerja.create') }}" class="btn btn-info pull-right btn-add-unitkerja" title="Tambah Unit Kerja"><i class="fa fa-plus-circle"></i> Tambah Unit Kerja</a>
              <div class="x_panel">

                <div class="x_title">
                  <h2>Data Unit Kerja</h2>
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
                  <table id="datatable" class="table table-hover table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 5%;">No</th>
                        <th>Nama Unit Kerja</th>
                        <th style="width: 20%;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $no = 1;
                      @endphp
                    @foreach ($unitkerja as $uk)
                      <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $uk->nama_unitkerja }}</td>
                        <td class="text-center">
                          <a href="{{ route('admin.unitkerja.show', $uk->id) }}" title="View Unit Kerja" class="btn btn-info btn-show-unitkerja"><i class="fa fa-eye"></i> View</a>
                          <a href="{{ route('admin.unitkerja.edit', $uk->id) }}" title="Edit Unit Kerja" class="btn btn-primary btn-edit-unitkerja"><i class="fa fa-edit"></i> Edit</a>
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