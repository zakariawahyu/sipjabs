    <div role="main">
        <div class="">

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              @foreach ($tallents as $tallent)
                  
             
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Pegawai <small>{{ $tallent->pegawai->nama_lengkap }}</small></h2>
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


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_jabatan{{ $tallent->pegawai->nip }}" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Data Jabatan</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_detail{{ $tallent->pegawai->nip }}" id="tab" role="tab" data-toggle="tab" aria-expanded="true">Detail Pegawai</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_pendidikan{{ $tallent->pegawai->nip }}" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Pendidikan</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_skill{{ $tallent->pegawai->nip }}" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Skill</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_personalq{{ $tallent->pegawai->nip }}" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Personal Quality</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="tab_detail{{ $tallent->pegawai->nip }}" aria-labelledby="tab">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="text-center">
                                @if ($tallent->pegawai->jenis_kelamin == "L")
                                    <img src="{{ asset('asset/images/male.png') }}" class="img-circle">
                                @else
                                    <img src="{{ asset('asset/images/female.png') }}" class="img-circle">
                                @endif
                                <h3 class="profile-username text-center">DATA PRIBADI</h3>
                                <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-2 col-sm-2">

                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                     <table class="table table-hover">
                                <tr>
                                  <td>Nama Lengkap</td>
                                  <td>:</td>
                                  <td>{{ $tallent->pegawai->nama_lengkap }}</td>
                                </tr>
                                <tr>
                                  <td>NIP</td>
                                  <td>:</td>
                                  <td>{{ $tallent->pegawai->nip }}</td>
                                </tr>
                                <tr>
                                  <td>Jabatan</td>
                                  <td>:</td>
                                  <td>{{ $tallent->pegawai->jabatanstruktural->jabatan->nama_jabatan }} {{ $tallent->pegawai->jabatanstruktural->unitbagian->nama_unitbagian }}</td>
                                </tr>
                                <tr>
                                  <td>Status Pegawai</td>
                                  <td>:</td>
                                  <td>{{ $tallent->pegawai->status_pegawai }}</td>
                                </tr>
                                <tr>
                                  <td>Masa kerja</td>
                                  <td>:</td>
                                  <td>{{ $tallent->pegawai->masa_kerja }} Tahun (Mulai dari tahun @php
                                      $masa = $tallent->pegawai->masa_kerja;
                                      $tgl1 = date('Y');
                                      $tgl2 = date('Y', strtotime('-'.$masa.' year', strtotime($tgl1))); 
                                      echo $tgl2;
                                  @endphp)</td>
                                </tr>
                                <tr>
                                  <td>TTL</td>
                                  <td>:</td>
                                  <td>{{ $tallent->pegawai->ttl }}</td>
                                </tr>
                                <tr>
                                  <td>Status Perkawinan</td>
                                  <td>:</td>
                                  <td>{{ $tallent->pegawai->status_perkawinan }}</td>
                                </tr>
                                <tr>
                                  <td>Golongan Darah</td>
                                  <td>:</td>
                                  <td>{{ $tallent->pegawai->gol_darah }}</td>
                                </tr>
                                <tr>
                                  <td>Jenis Kelamin</td>
                                  <td>:</td>
                                   @if ( $tallent->pegawai->jenis_kelamin =="L")
                                  <td>Laki Laki</td>
                                  @elseif($tallent->pegawai->jenis_kelamin =="P")
                                  <td>Perempuan</td>
                                  @endif
                                </tr>
                                <tr>
                                  <td>Agama</td>
                                  <td>:</td>
                                  <td>{{ $tallent->pegawai->agama }}</td>
                                </tr>
                                <tr>
                                  <td>Tinggi Badan</td>
                                  <td>:</td>
                                  <td>{{ $tallent->pegawai->tinggi_badan }} cm</td>
                                </tr>
                                <tr>
                                  <td>Berat Badan</td>
                                  <td>:</td>
                                  <td>{{ $tallent->pegawai->berat_badan }} kg</td>
                                </tr>
                                <tr>
                                  <td>Alamat</td>
                                  <td>:</td>
                                  <td>{{ $tallent->pegawai->alamat }}</td>
                                </tr>
                                <tr>
                                  <td>Melanggar kode etik</td>
                                  <td>:</td>
                                  <td>{{ $tallent->pegawai->kode_etik   }}</td>
                                </tr>
                              </table>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">

                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_pendidikan{{ $tallent->pegawai->nip }}" aria-labelledby="profile-tab">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="text-center">
                                 @if ($tallent->pegawai->jenis_kelamin == "L")
                                    <img src="{{ asset('asset/images/male.png') }}" class="img-circle">
                                @else
                                    <img src="{{ asset('asset/images/female.png') }}" class="img-circle">
                                @endif
                                <h3 class="profile-username text-center">DATA PENDIDIKAN</h3>
                                <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <table class="table table-hover text-center">
                                @foreach ($tallent->pegawai->riwayatpendidikan as $rp)
                                <tr>
                                   <td>{{ $rp->pendidikan->jenjang_pendidikan }} {{ $rp->pendidikan->jurusan }}</td>
                                </tr>
                                @endforeach
                              </table>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">

                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_skill{{ $tallent->pegawai->nip }}" aria-labelledby="profile-tab">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="text-center">
                                 @if ($tallent->pegawai->jenis_kelamin == "L")
                                    <img src="{{ asset('asset/images/male.png') }}" class="img-circle">
                                @else
                                    <img src="{{ asset('asset/images/female.png') }}" class="img-circle">
                                @endif
                                <h3 class="profile-username text-center">SKILL PEGAWAI</h3>
                                <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <table class="table table-hover text-center">
                                @foreach ($tallent->pegawai->skillpegawai as $sk)
                                <tr>
                                   <td>{{ $sk->skill->nama_skill }}</td>
                                </tr>
                                @endforeach
                              </table>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">

                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_personalq{{ $tallent->pegawai->nip }}" aria-labelledby="profile-tab">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="text-center">
                                 @if ($tallent->pegawai->jenis_kelamin == "L")
                                    <img src="{{ asset('asset/images/male.png') }}" class="img-circle">
                                @else
                                    <img src="{{ asset('asset/images/female.png') }}" class="img-circle">
                                @endif
                                <h3 class="profile-username text-center">PERSONAL QUALITY PEGAWAI</h3>
                                <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <table class="table table-hover text-center">
                                @foreach ($tallent->pegawai->personalquality as $pq)
                                <tr>
                                   <td>{{ $pq->personalquality->nama_personalquality }}</td>
                                </tr>
                                @endforeach
                              </table>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">

                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_jabatan{{ $tallent->pegawai->nip }}" aria-labelledby="home-tab">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="text-center">
                                 @if ($tallent->pegawai->jenis_kelamin == "L")
                                    <img src="{{ asset('asset/images/male.png') }}" class="img-circle">
                                @else
                                    <img src="{{ asset('asset/images/female.png') }}" class="img-circle">
                                @endif
                                <h3 class="profile-username text-center">DATA JABATAN {{ $tallent->pegawai->nama_lengkap }}</h3>
                                <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <table class="table table-hover table-bordered table-striped">
                                <tr>
                                <th>Jabatan Lama</th>
                                <th>Jabatan Baru</th>
                                </tr>
                                <tr>
                                  <td>{{ $tallent->pegawai->jabatanstruktural->jabatan->nama_jabatan }} {{ $tallent->pegawai->jabatanstruktural->unitbagian->nama_unitbagian }}</td>
                                  <td>{{ $tallent->posisikosong->jabatanstruktural->jabatan->nama_jabatan }} {{ $tallent->posisikosong->jabatanstruktural->unitbagian->nama_unitbagian }}</td>
                                </tr>
                              </table>
                            </div>
                          </div>
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