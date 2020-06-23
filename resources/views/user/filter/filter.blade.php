@extends('user.layouts.master')

@section('title', 'SIPJABS | Filter Kandidat')

@section('content')
    <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Filter Kandidat</h3>
            </div>

            <div class="title_right">
              <div class="col-md-4 col-sm-4 col-xs-12 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Kandidat</a></li>
                  <li class="breadcrumb-item active">Filter Kandidat</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">

                <div class="x_title">
                  <h2>Hasil Filter</h2>
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
                    <section class="cat_product_area">
                      <div class="container-fluid">
                        <div class="row flex-row-reverse">
                          <div class="col-lg-9">
                            <div class="product_top_bar">
                              <div class="left_dorp">
                                {{-- Form filter Khusus --}}
                              <form action="{{ route('filtertallent') }}" id="product_filter_form" method="GET">
                                {{-- <input type="hidden" name="level" value="{{ $level }}">
                                <input type="hidden" name="masakerja" value="{{ $masakerja }}"> --}}
                                <input type="hidden" name="jabatanstruktural" value="{{ $jabstruk }}">
                                <div class="row">
                                  <div class="col-lg-4">
                                    <select class="sorting" name="order_by" id="order_by">
                                    <option value="" disabled selected>Default Sorting :</option>
                                    <option value="asc" @if ($orderby == 'asc')
                                        selected
                                    @endif>Sorting : A - Z</option>
                                    <option value="desc" @if ($orderby == 'desc')
                                        selected
                                    @endif>Sorting : Z - A</option>
                                  </select>
                                  </div>
                                  <div class="col-lg-2">

                                  </div>
                                  <div class="col-lg-4">
                                    <select class="show" name="show" id="show">
                                      <option value="" disabled selected>Show Page :</option>
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
                                  <div class="col-lg-2">
                                    <p></p>
                                    @if ($pegawai !== "")
                                      <p>Total : {{ $pegawai->total() }}</p>
                                    @else
                                      <p>Total : 0</p>
                                    @endif
                                  </div>
                                </div>
                              </div>
                            </div>
                           
                            <div class="latest_product_inner row">
                              @if ($pegawai !== "")
                              @foreach ($pegawai as $pg)
                              <div class="col-lg-4 col-md-4 col-sm-6 profile_details">
                                <div class="f_p_item">
                                  <div class="well profile_view">
                                    <div class="col-sm-12 text-left">
                                      <h4 class="brief"><i>{{ $pg->jabatanstruktural->jabatan->nama_jabatan }} {{ $pg->jabatanstruktural->unitbagian->nama_unitbagian }}</i></h4>
                                      <div class="left col-xs-7">
                                        <h2>{{ $pg->nama_lengkap }}</h2>
                                        <p>{{ $pg->status_pegawai }}</p>
                                        <ul class="list-unstyled">
                                          <li><i class="fa fa-credit-card"></i> NIP : {{ $pg->nip}}</li>
                                          <li><i class="fa fa-building"></i> {{ $pg->jabatanstruktural->unitkerja->nama_unitkerja }} </li>
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
                                      <a href="{{ route('user.filter.show', $pg->id) }}" class="btn btn-success btn-xs btn-show" title="Detail Pegawai {{ $pg->nama_lengkap }}"><i class="fa fa-user"></i> View Profile</a>
                                      <a href="{{ route('user.cart.add', $pg->id.' '.$jabstruk) }}" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> Pilih</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                @endforeach
                              @else
                                <h1 class="text-center">Pegawai Tidak Ditemukan</h1>    
                              @endif
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="left_sidebar_area">
                              <aside class="left_widgets p_filter_widgets">
                                <div class="l_w_title">
                                  <h3>Filter Pegawai</h3>
                                </div>
                                <div class="widgets_inner">
                                  <h4>Jabatan Pegawai</h4>
                                  <ul class="list">
                                    
                                    @if ($jabatan)
                                      @foreach ($jabatan as $jb)
                                      <div class="checkbox">
                                        <label>
                                          <input onchange="javascript:this.form.submit();" value="{{ $jb->nama_jabatan }}" type="checkbox" name="jabatan[]"
                                          @if(isset($selected_jabatan)) 	@if (in_array($jb->nama_jabatan, $selected_jabatan)) 	checked="checked" 	@endif @endif> {{ $jb->nama_jabatan }}
                                        </label>
                                      </div>
                                      @endforeach
                                     @endif
                                  </ul>
                                </div>
                                <div class="widgets_inner">
                                  <h4>Status Pegawai</h4>
                                  <ul class="list">
                                    
                                    @if ($statuspegawai)
                                      @foreach ($statuspegawai as $sp)
                                      <div class="checkbox">
                                        <label>
                                          <input onchange="javascript:this.form.submit();" value="{{ $sp->status_pegawai }}" type="checkbox" name="status_pegawai[]"
                                          @if(isset($selected_status)) 	@if (in_array($sp->status_pegawai, $selected_status)) 	checked="checked" 	@endif @endif> {{ $sp->status_pegawai }}
                                        </label>
                                      </div>
                                      @endforeach
                                     @endif
                                  </ul>
                                </div>
                                <div class="widgets_inner">
                                  <h4>Masa Kerja Minimal</h4>
                             
                                  <input onchange="javascript:this.form.submit();" class="custom-range" id="customRange" type="range" min="0" max="10" @if ($selected_masakerja == null)
                                      value="0"
                                  @endif  name="masakerja" @if ($selected_masakerja)
                                      value="{{ $selected_masakerja }}"
                                  @endif/>
                                  <div id="result"> <b></b> Tahun</div>
           
                                  
                                </div>
                                <div class="widgets_inner">
                                  <h4>Pendidikan Pegawai</h4>
                                  <ul class="list">
                                    <li>
                                      @if ($jenjangpendidikan)
                                    <select onchange="javascript:this.form.submit();" name="jenjang[]" class="select2" multiple="multiple" data-placeholder="Pilih Jenjang Pendidikan" style="width: 100%;">
                                      @foreach ($jenjangpendidikan as $jp)
                                          <option value="{{ $jp->jenjang_pendidikan }}" @if(isset($selected_jenjang)) 	@if (in_array($jp->jenjang_pendidikan, $selected_jenjang)) 	selected 	@endif @endif>{{ $jp->jenjang_pendidikan }}</option>
                                      @endforeach
                                    </select>
                                     @endif
                                    </li>
                                    <li>
                                      @if ($jurusan)
                                    <select onchange="javascript:this.form.submit();" name="jurusan[]" class="select2" multiple="multiple" data-placeholder="Pilih Jurusan" style="width: 100%;">
                                      @foreach ($jurusan as $j)
                                          <option value="{{ $j->jurusan }}" @if(isset($selected_jurusan)) 	@if (in_array($j->jurusan, $selected_jurusan)) 	selected 	@endif @endif>{{ $j->jurusan }}</option>
                                      @endforeach
                                    </select>
                                     @endif
                                    </li>
                                  </ul>
                                </div>
                                <div class="widgets_inner">
                                  <h4>Skill Pegawai</h4>
                                  <ul class="list">
                                    <li>
                                      @if ($skill)
                                    <select onchange="javascript:this.form.submit();" name="skill[]" class="select2" multiple="multiple" data-placeholder="Pilih Skill" style="width: 100%;">
                                      @foreach ($skill as $sk)
                                          <option value="{{ $sk->nama_skill }}" @if(isset($selected_skill)) 	@if (in_array($sk->nama_skill, $selected_skill)) 	selected 	@endif @endif>{{ $sk->nama_skill }}</option>
                                      @endforeach
                                    </select>
                                     @endif
                                    </li>
                                  </ul>
                                </div>
                                <div class="widgets_inner">
                                  <h4>Personal Quality Pegawai</h4>
                                  <ul class="list">
                                    <li>
                                      @if ($personalquality)
                                    <select onchange="javascript:this.form.submit();" name="personalquality[]" class="select2" multiple="multiple" data-placeholder="Pilih Personal Quality" style="width: 100%;">
                                      @foreach ($personalquality as $pq)
                                          <option value="{{ $pq->nama_personalquality }}" @if(isset($selected_personalquality)) 	@if (in_array($pq->nama_personalquality, $selected_personalquality)) 	selected 	@endif @endif>{{ $pq->nama_personalquality }}</option>
                                      @endforeach
                                    </select>
                                     @endif
                                    </li>
                                  </ul>
                                </div>
                                <div class="widgets_inner">
                                  <h4>Pelanggaran Kode Etik</h4>
                                  <ul class="list">
                                    
                                    @if ($kodeetik)
                                      @foreach ($kodeetik as $ke)
                                      <div class="checkbox">
                                        <label>
                                          <input onchange="javascript:this.form.submit();" value="{{ $ke->kode_etik }}" type="checkbox" name="kode_etik[]"
                                          @if(isset($selected_kodeetik)) 	@if (in_array($ke->kode_etik, $selected_kodeetik)) 	checked="checked" 	@endif @endif> {{ $ke->kode_etik }}
                                        </label>
                                      </div>
                                      @endforeach
                                     @endif
                                  </ul>
                                </div>
                              </aside>
                            </div>
                          </div>
                        </form>
                        </div>
                        @if ($pegawai !== "")
                        <div class="row">
                          <nav class="cat_page mx-auto" aria-label="Page navigation example">
                            <ul class="pagination">
                              {{ $pegawai->appends(request()->input())->links() }}
                            </ul>
                          </nav>
                        @endif
                        </div>
                      </div>
                    </section>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
@endsection