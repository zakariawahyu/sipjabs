@extends('user.layouts.master')

@section('title', 'SIPJABS | Cart')

@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Kandidat Sementara</h3>
              </div>

              <div class="title_right">
              <div class="col-md-4 col-sm-4 col-xs-12 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Kandidat Sementara</a></li>
                </ol>
              </div>
            </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View Kandidat Sementara <small>| Data kandidat sementara setelah melalui proses filtering</small></h2>
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
                    <section>
                        <div class="container">
                            <div class="cart_inner">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width:70%" class="text-center">Pegawai</th>
                                                <th scope="col" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @if ($carts !== "")

                                            @foreach ($carts as $ct)
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="col-xs-2 text-left">
                                                        @if ($ct->pegawai->jenis_kelamin == 'L')
                                                            <img src="{{ asset('asset/images/male.png') }}" style="width:50%" alt="" class="img-circle">
                                                        @else
                                                            <img src="{{ asset('asset/images/female.png') }}" style="width:50%" alt="" class="img-circle">
                                                        @endif
                                                        </div>
                                                        <div class="media-body text-left">
                                                            <p>Nama : {{ $ct->pegawai->nama_lengkap }}</p>
                                                            <p>NIP  : {{ $ct->pegawai->nip }}</p>
                                                            <p>Status : {{ $ct->pegawai->status_pegawai }}</p>
                                                            <hr>
                                                            <p>Jabatan Lama : {{ $ct->pegawai->jabatanstruktural->jabatan->nama_jabatan }} {{ $ct->pegawai->jabatanstruktural->unitbagian->nama_unitbagian }}</p>
                                                            <h4>Jabatan Baru : {{ $ct->posisikosong->jabatanstruktural->jabatan->nama_jabatan }} {{ $ct->posisikosong->jabatanstruktural->unitbagian->nama_unitbagian }}</h4>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                  @method('delete')
                                                    <a href="{{ route('user.cart.show', $ct->pegawai->id) }}" class="main_btn btn-show-cart" title="Detail Pegawai {{ $ct->pegawai->nama_lengkap }}"><i class="fa fa-eye"></i> View</a>
                                                    <a href="{{ route('user.cart.delete', $ct->pegawai->id) }}" class="org_btn"><i class="fa fa-trash"></i> Delete</a> 
                                                </td>
                                            </tr>
                                             @endforeach

  
                                        @else
                                            <tr>
                                              <td>
                                                <h1 class="text-center">Data tidak ditemukan</h1>
                                              </td>
                                              <td></td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Proses kandidat <small>| Memproses kandidat sementara berdasarkan posisi kosong</small></h2>
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
                    <section>
                        <div class="container">
                            <div class="cart_inner">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width:70%" class="text-center">Jabatan Baru</th>
                                                <th scope="col" class="text-center">Jumlah Kandidat</th>
                                                <th scope="col" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @if ($carts !== "")

                                            @foreach ($posisi as $ps)
                                            <tr>
                                                <td>
                                                    <h3>{{ $ps->posisikosong->jabatanstruktural->jabatan->nama_jabatan }} {{ $ps->posisikosong->jabatanstruktural->unitbagian->nama_unitbagian }}</h3>
                                                </td>
                                                <td>
                                                  <h3>Sub Total Pegawai : {{ $ps->count }}</h3>
                                                </td>
                                                <td>
                                                  
                                                    <a href="{{ route('user.tallent.add', $ps->id_posisikosong) }}" class="green_btn"><i class="fa fa-check-square-o"></i> Proses Kandidat</a>
                                                </td>
                                            </tr>
                                             @endforeach

                                             {{-- @foreach ($posisi as $ps)
                                                 
                                             
                                            <tr>
                                                <td></td> 
                                                <td>
                                                    <h3>Subtotal Pegawai</h3>
                                                </td>
                                                <td>
                                                    <h1>{{ $carts->count() }}</h1>
                                                </td>
                                            </tr> --}}
                                        @else
                                            <tr>
                                              <td>
                                                <h1 class="text-center">Data tidak ditemukan</h1>
                                              </td>
                                              <td></td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
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