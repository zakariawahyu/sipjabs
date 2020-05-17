@extends('user.layouts.master')

@section('title', 'SIPJABS | Cart')

@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Cart</h3>
              </div>

              <div class="title_right">
              <div class="col-md-4 col-sm-4 col-xs-12 pull-right">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Cart</a></li>
                </ol>
              </div>
            </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View Cart</h2>
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
                                                <th scope="col" style="width:80%">Pegawai</th>
                                                <th scope="col" style="width:40%">Action</th>
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
                                                            <p>Jabatan Baru : {{ $ct->jabatanstruktural->jabatan->nama_jabatan }} {{ $ct->jabatanstruktural->unitbagian->nama_unitbagian }}</p>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                  @method('delete')
                                                    <a href="{{ route('user.cart.delete', $ct->pegawai->id) }}" class="gray_btn"><i class="fa fa-trash"></i> Delete</a>
                                                    <a href="{{ route('user.cart.show', $ct->pegawai->id) }}" class="main_btn2 btn-show-cart" title="Detail Pegawai {{ $ct->pegawai->nama_lengkap }}"><i class="fa fa-eye"></i> View</a>
                                                </td>
                                            </tr>
                                             @endforeach
                                            <tr>
                                                <td></td> 
                                                <td>
                                                    <h3>Subtotal Pegawai</h3>
                                                </td>
                                                <td>
                                                    <h1>{{ $carts->count() }}</h1>
                                                </td>
                                            </tr>
                                            <tr class="out_button_area">
                                                <td>

                                                </td>
                                                <td>

                                                </td>
                                                <td>

                                                </td>
                                                <td>
                                                    <div class="checkout_btn_inner text-right">
                                                        <a class="main_btn" href="{{ route('user.tallent.create') }}">Proceed Tallent</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @else
                                            <tr>
                                              <td>
                                                <h1 class="text-center">Empty Cart</h1>
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