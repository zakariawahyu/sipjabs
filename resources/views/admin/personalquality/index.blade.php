@extends('admin.layouts.master')

@section('title', 'SIPJABS | Data Personal Quality')

@section('content')
    <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Personal Quality</h3>
            </div>

            <div class="title_right">
              <div class="col-md-3 col-sm-3 col-xs-8 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Personal Quality</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <a href="{{ route('admin.personalquality.create') }}" title="Tambah Personal Quality" class="btn btn-info pull-right btn-add-personalquality"><i class="fa fa-plus-circle"></i> Tambah Personal Quality</a>
              <div class="x_panel">

                <div class="x_title">
                  <h2>Data Personal Quality</h2>
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
                  <table id="datatableskill" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="width:5%">No</th>
                        <th>Nama Personal Quality</th>
                        <th style="width:20%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @php
                          $no = 1;
                      @endphp
                      @foreach ($personalquality as $pq)
                      <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $pq->nama_personalquality }}</td>
                        <td class="text-center">
                          <a href="{{ route('admin.personalquality.show', $pq->id) }}" title="View Personal Quality" class="btn btn-info btn-show-personalquality"><i class="fa fa-eye"></i> View</a>
                          <a href="{{ route('admin.personalquality.edit', $pq->id) }}" title="Edit Personal Quality" class="btn btn-primary btn-edit-personalquality"><i class="fa fa-edit"></i> Edit</a>
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