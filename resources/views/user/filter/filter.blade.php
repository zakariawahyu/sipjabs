@extends('user.layouts.master')

@section('title', 'SIPJABS | Cari Tallent')

@section('content')
    <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Tallent</h3>
            </div>

            <div class="title_right">
              <div class="col-md-4 col-sm-4 col-xs-12 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Tallent</a></li>
                  <li class="breadcrumb-item active">Hasil Tallent</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">

                <div class="x_title">
                  <h2>Hasil Tallent |<small>Aditional Information</small></h2>
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
                  <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="">
                      <ul class="to_do">
                        {{-- Form filter Khusus --}}
                        <form action="{{ route('filtertallent') }}" id="product_filter_form" method="GET">
                          <li class="filter-item">
                            <section class="filter-item-inner">
                              <h2 class="filter-item-inner-heading minus">
                                Status Pegawai
                              </h2>
                              <ul class="filter-attribute-list ul-reset">
                                  <div class="filter-attribute-list-inner">
                                    <div class="form-group">
                                       @if ($statuspegawai)
                                    <select onchange="javascript:this.form.submit();" name="status_pegawai[]" class="select2" multiple="multiple" data-placeholder="Pilih Status Pegawai" style="width: 100%;">
                                      @foreach ($statuspegawai as $sp)
                                          <option value="{{ $sp->status_pegawai }}" @if(isset($selected_status)) 	@if (in_array($sp->status_pegawai, $selected_status)) 	selected 	@endif @endif>{{ $sp->status_pegawai }}</option>
                                      @endforeach
                                    </select>
                                     @endif
                                  </div>
                                </div>
                              </ul>
                            </section>
                          </li>
                          <li class="filter-item">
                            <section class="filter-item-inner">
                              <h2 class="filter-item-inner-heading minus">
                                Pendidikan
                              </h2>
                              <ul class="filter-attribute-list ul-reset">
                                  <div class="filter-attribute-list-inner">
                                    <div class="form-group">
                                       @if ($jenjangpendidikan)
                                    <select onchange="javascript:this.form.submit();" name="jenjang[]" class="select2" multiple="multiple" data-placeholder="Pilih Jenjang Pendidikan" style="width: 100%;">
                                      @foreach ($jenjangpendidikan as $jp)
                                          <option value="{{ $jp->jenjang_pendidikan }}" @if(isset($selected_jenjang)) 	@if (in_array($jp->jenjang_pendidikan, $selected_jenjang)) 	selected 	@endif @endif>{{ $jp->jenjang_pendidikan }}</option>
                                      @endforeach
                                    </select>
                                     @endif
                                  </div>
                                </div>
                              </ul>
                              <ul class="filter-attribute-list ul-reset">
                                  <div class="filter-attribute-list-inner">
                                    <div class="form-group">
                                       @if ($jurusan)
                                    <select onchange="javascript:this.form.submit();" name="jurusan[]" class="select2" multiple="multiple" data-placeholder="Pilih Jurusan" style="width: 100%;">
                                      @foreach ($jurusan as $j)
                                          <option value="{{ $j->jurusan }}" @if(isset($selected_jurusan)) 	@if (in_array($j->jurusan, $selected_jurusan)) 	selected 	@endif @endif>{{ $j->jurusan }}</option>
                                      @endforeach
                                    </select>
                                     @endif
                                  </div>
                                </div>
                              </ul>
                            </section>
                          </li>
                          <li class="filter-item">
                            <section class="filter-item-inner">
                              <h2 class="filter-item-inner-heading minus">
                                Skill
                              </h2>
                              <ul class="filter-attribute-list ul-reset">
                                  <div class="filter-attribute-list-inner">
                                    <div class="form-group">
                                       @if ($skill)
                                    <select onchange="javascript:this.form.submit();" name="skill[]" class="select2" multiple="multiple" data-placeholder="Pilih Skill" style="width: 100%;">
                                      @foreach ($skill as $sk)
                                          <option value="{{ $sk->nama_skill }}" @if(isset($selected_skill)) 	@if (in_array($sk->nama_skill, $selected_skill)) 	selected 	@endif @endif>{{ $sk->nama_skill }}</option>
                                      @endforeach
                                    </select>
                                     @endif
                                  </div>
                                </div>
                              </ul>
                            </section>
                          </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <div class="product-show-option">
                      <div class="row">
                        <div class="col-lg-2 col-md-2">
                              <div class="select-option">
                                <input type="hidden" name="level" value="{{ $level }}">
                                <input type="hidden" name="masakerja" value="{{ $masakerja }}">

                                  <select class="form-control sorting" name="order_by" id="order_by">
                                    <option value="" disabled selected>Default Sorting </option>
                                    <option value="asc" @if ($orderby == 'asc')
                                        selected
                                    @endif>Sorting : A - Z</option>
                                    <option value="desc" @if ($orderby == 'desc')
                                        selected
                                    @endif>Sorting : Z - A</option>
                                  </select>
                              </div>
                            
                        </div>
                        <div class="col-lg-2 col-md-2">
                           <select class="form-control" name="show" id="show">
                                  <option value="" disabled selected>Show Page</option>
                                  <option value="10" @if ($show == 10)
                                      selected
                                  @endif>Show : 10</option>
                                  <option value="25" @if ($show == 25)
                                      selected
                                  @endif>Show : 25</option>
                                  <option value="50" @if ($show == 50)
                                      selected
                                  @endif>Show : 50</option>
                                </select>
                        </div>
                         @if ($pegawai !== "")
                        <div class="col-lg-8 col-md-8 text-right">
                          {{ $pegawai->appends(request()->input())->links() }}
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="row">
                          @foreach ($pegawai as $pg)
                        <div class="col-lg-4 col-sm-6 profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"><i>{{ $pg->jabatanstruktural->jabatan->nama_jabatan }} {{ $pg->nama_unitbagian }}</i></h4>
                              <div class="left col-xs-7">
                                <h5>{{ $pg->nama_lengkap }}</h5>
                                <p><strong>About:
                                <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: Bandung</li>
                                  <li><i class="fa fa-phone"></i> Phone : 082329027297 </li>
                                </ul>
                              </div>
                              <div class="right col-xs-5 text-center">
                                  @if ($pg->jenis_kelamin == 'L')
                                    <img src="{{ asset('asset/images/male.png') }}" alt="" class="img-circle img-responsive">
                                  @else
                                    <img src="{{ asset('asset/images/female.png') }}" alt="" class="img-circle img-responsive">
                                  @endif
                                
                              </div>
                            </div>
                            <div class="col-xs-12 bottom text-center">
                              <div class="col-xs-12 col-sm-6 emphasis">

                              </div>
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <a href="#" class="btn btn-info btn-sm pull-right"><i class="fa fa-eye"></i> View
                                  Profile</a>
                                <a href="#" class="btn btn-primary btn-sm pull-right"><i class="fa fa-check"></i>
                                  Pilih</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach

                      </div>
                      
                      @else
                      <h1>not found</h1>
                  
                      @endif
                
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
@endsection