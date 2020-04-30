@extends('admin.layouts.master')

@section('title', 'SIPJABS | Data Users')

@section('content')
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Users</h3>
            </div>

            <div class="title_right">
              <div class="col-md-2 col-sm-2 col-xs-8 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Users</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <a href="{{ route('admin.users.create') }}" class="btn btn-info pull-right"><i class="fa fa-plus-circle"></i> Tambah User</a>
              <div class="x_panel">

                <div class="x_title">
                  <h2>Data Users</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                          class="fa fa-wrench"></i></a>
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
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Jabatan</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Hak Akses</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $no = 1;
                      @endphp
                      @foreach ($users as $user)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->pegawai->nama_lengkap }}</td>
                        <td>{{ $user->pegawai->jabatanstruktural->jabatan->nama_jabatan }} {{$user->pegawai->jabatanstruktural->unitbagian->nama_unitbagian}}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td class="text-center">
                          <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary btn-edit-users-admin"><i class="fa fa-edit"></i> Edit</a>
                          <a href="{{ route('admin.users.delete', $user->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
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
