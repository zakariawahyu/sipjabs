
    <div class="" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Edit Jabatan Struktural</h2>
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
                      <form action="{{ route('admin.jabatanstruktural.update', $jabstruk->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Unit Kerja</label>
                            <select class="form-control select2" name="unitkerja">
                                    <option value="" selected disabled>Pilih Unitkerja</option>
                                @foreach ($unitkerja as $uk)
                                    <option value="{{ $uk->id }}" @if ($uk->id == $jabstruk->id_unitkerja)
                                        selected
                                    @endif>{{ $uk->nama_unitkerja }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <select class="form-control select2" name="jabatan">
                                    <option value="" selected disabled>Pilih Jabatan</option>
                                @foreach ($jabatan as $jb)
                                    <option value="{{ $jb->id }}" @if ($jb->id == $jabstruk->id_jabatan)
                                        selected
                                    @endif>{{ $jb->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Unit Bagian</label>
                            <select class="form-control select2" name="unitbagian">
                                    <option value="" selected disabled>Pilih Unit Bagian</option>
                                @foreach ($unitbagian as $ub)
                                    <option value="{{ $ub->id }}" @if ($ub->id == $jabstruk->id_unitbagian)
                                        selected
                                    @endif>{{ $ub->nama_unitbagian }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                          <label>Formasi Jabatan</label>
                          <input type="text" class="form-control" name="formasi" value="{{ $jabstruk->formasi_jabatan }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
