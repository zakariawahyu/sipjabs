      <div role="main">
        <div class="">

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Data Pegawai</h2>
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
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="text-center">
                                <h4 class="profile-username text-center">Pegawai yang memiliki Pendidikan :  {{ $pendidikan->jenjang_pendidikan }} {{ $pendidikan->jurusan }}</h4>
                                <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <table id="datatable" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 5%;">No</th>
                                    <th>Nama Pegawai</th>
                                    <th>NIP</th>
                                    <th>Status Pegawai</th>
                                    <th>Jabatan</th>
                                    <th>Pendidikan</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($pegawai as $pg)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $pg->nama_lengkap }}</td>
                                    <td>{{ $pg->nip }}</td>
                                    <td>{{ $pg->status_pegawai }}</td>
                                    <td>{{ $pg->jabatanstruktural->jabatan->nama_jabatan }} {{ $pg->jabatanstruktural->unitbagian->nama_unitbagian }}</td>
                                    <td>
                                    @foreach ( $pg->riwayatpendidikan as $pend)
                                      {{ $pend->pendidikan->jenjang_pendidikan }} {{ $pend->pendidikan->jurusan }} <br>
                                    @endforeach
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
                </div>
              </div>
          </div>
        </div>
      </div>
