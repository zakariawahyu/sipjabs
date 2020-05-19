@extends('admin.layouts.master')

@section('title', 'SIPJABS | Data Skill')

@section('content')
    <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Skill</h3>
            </div>

            <div class="title_right">
              <div class="col-md-2 col-sm-2 col-xs-8 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Skill</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <a href="{{ route('admin.skill.create') }}" title="Tambah Skill" class="btn btn-info pull-right btn-add-skill"><i class="fa fa-plus-circle"></i> Tambah Skill</a>
              <div class="x_panel">

                <div class="x_title">
                  <h2>Data Skill</h2>
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
                        <th>Nama Skill</th>
                        <th style="width:20%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @php
                          $no = 1;
                      @endphp
                      @foreach ($skills as $sk)
                      <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $sk->nama_skill }}</td>
                        <td class="text-center">
                          <a href="{{ route('admin.skill.show', $sk->id) }}" title="View Skill" class="btn btn-info btn-show-skill"><i class="fa fa-eye"></i> View</a>
                          <a href="{{ route('admin.skill.edit', $sk->id) }}" title="Edit Skill" class="btn btn-primary btn-edit-skill"><i class="fa fa-edit"></i> Edit</a>
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