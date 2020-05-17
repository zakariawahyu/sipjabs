      <div role="main">
        <div class="">

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              @php
                  $no =1;
              @endphp
              @foreach ($tallents as $tl)
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Detail Kandidat {{ $no++ }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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

                    
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="text-center">
                                @if ($tl->pegawai->jenis_kelamin == "L")
                                    <img src="{{ asset('asset/images/male.png') }}" class="img-circle">
                                @else
                                    <img src="{{ asset('asset/images/female.png') }}" class="img-circle">
                                @endif
                                <h3 class="profile-username text-center">DATA PRIBADI {{ $tl->pegawai->nama_lengkap }}</h3>
                                <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <table class="table table-hover">
                                <tr>
                                  <td>Nama Lengkap</td>
                                  <td>:</td>
                                  <td>{{ $tl->pegawai->nama_lengkap }}</td>
                                </tr>
                                <tr>
                                  <td>NIP</td>
                                  <td>:</td>
                                  <td>{{$tl->pegawai->nip }}</td>
                                </tr>
                                <tr>
                                  <td>Jabatan</td>
                                  <td>:</td>
                                  <td>{{ $tl->pegawai->jabatanstruktural->jabatan->nama_jabatan }} {{ $tl->pegawai->jabatanstruktural->unitbagian->nama_unitbagian }}</td>
                                </tr>
                                <tr>
                                  <td>Status Pegawai</td>
                                  <td>:</td>
                                  <td>{{ $tl->pegawai->status_pegawai }}</td>
                                </tr>
                                <tr>
                                  <td>Masa kerja</td>
                                  <td>:</td>
                                  <td>{{ $tl->pegawai->masa_kerja }} Tahun (Mulai dari tahun @php
                                      $masa = $tl->pegawai->masa_kerja;
                                      $tgl1 = date('Y');
                                      $tgl2 = date('Y', strtotime('-'.$masa.' year', strtotime($tgl1))); 
                                      echo $tgl2;
                                  @endphp)</td>
                                </tr>
                                <tr>
                                  <td>TTL</td>
                                  <td>:</td>
                                  <td>{{ $tl->pegawai->ttl }}</td>
                                </tr>
                                <tr>
                                  <td>Status Perkawinan</td>
                                  <td>:</td>
                                  <td>{{ $tl->pegawai->status_perkawinan }}</td>
                                </tr>
                                <tr>
                                  <td>Golongan Darah</td>
                                  <td>:</td>
                                  <td>{{ $tl->pegawai->gol_darah }}</td>
                                </tr>
                                <tr>
                                  <td>Jenis Kelamin</td>
                                  <td>:</td>
                                   @if ( $tl->pegawai->jenis_kelamin =="L")
                                  <td>Laki Laki</td>
                                  @elseif($tl->pegawai->jenis_kelamin =="P")
                                  <td>Perempuan</td>
                                  @endif
                                </tr>
                                <tr>
                                  <td>Agama</td>
                                  <td>:</td>
                                  <td>{{ $tl->pegawai->agama }}</td>
                                </tr>
                                <tr>
                                  <td>Tinggi Badan</td>
                                  <td>:</td>
                                  <td>{{ $tl->pegawai->tinggi_badan }} cm</td>
                                </tr>
                                <tr>
                                  <td>Berat Badan</td>
                                  <td>:</td>
                                  <td>{{ $tl->pegawai->berat_badan }} kg</td>
                                </tr>
                                <tr>
                                  <td>Alamat</td>
                                  <td>:</td>
                                  <td>{{ $tl->pegawai->alamat }}</td>
                                </tr>
                                <tr>
                                  <td>Melanggar kode etik</td>
                                  <td>:</td>
                                  <td>{{ $tl->pegawai->kode_etik   }}</td>
                                </tr>
                              </table>
                            </div>
                            <div class="col-md-3 col-sm-3">
                              <table class="table table-hover">
                                @foreach ($tl->pegawai->riwayatpendidikan as $rp)
                                  <tr>
                                   <td>Pendidikan {{ $rp->pendidikan->jenjang_pendidikan }} {{ $rp->pendidikan->jurusan }}</td>
                                </tr>
                                @endforeach
                              </table>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                              <table class="table table-hover text-center">
                                @foreach ($tl->pegawai->skillpegawai as $sk)
                                <tr>
                                   <td>Skill {{ $sk->skill->nama_skill }}</td>
                                </tr>
                                @endforeach
                              </table>
                              <table class="table table-hover text-center">
                                @foreach ($tl->pegawai->personalquality as $pq)
                                <tr>
                                   <td>{{ $pq->personalquality->nama_personalquality }}</td>
                                </tr>
                                @endforeach
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
