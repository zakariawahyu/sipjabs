@extends('user.layouts.master')

@section('title', 'SIPJABS | Cari Tallent')
 
@section('content')
    <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Cari Tallent</h3>
            </div>

            <div class="title_right">
              <div class="col-md-4 col-sm-4 col-xs-12 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Cari Tallent</li>
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
                  <h2>Cari Tallent |<small>Aditional Information</small></h2>
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
                  <form  class="form-horizontal form-label-left" action="{{ route('filtertallent') }}" method="GET">
                    <div class="form-group">
                     
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jabatan Minimal</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="level" class="form-control">
                            <option disabled selected value>Pilih Jabatan</option>
                            @foreach ($jabatan as $jb)
                                <option value="{{ $jb->level_jabatan }}">{{ $jb->nama_jabatan }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Masa Kerja Minimal
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input class="form-control col-md-7 col-xs-12" required="required"
                          type="text" name="masakerja">
                      </div>
                    </div>
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
        </div>

      </div>
@endsection