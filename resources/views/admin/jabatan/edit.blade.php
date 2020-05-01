
    <div class="" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Edit Jabatan</h2>
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
                      <form action="{{ route('admin.jabatan.update', $jabatan->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nama Jabatan</label>
                            <input type="text" required class="form-control" value="{{ $jabatan->nama_jabatan }}" name="jabatan">
                        </div>
                        <div class="form-group">
                            <label>Level Jabatan</label>
                            <select class="form-control select2" name="level">
                                <option disabled selected>Pilih Level</option>
                                <option value="1" @if ($jabatan->level_jabatan == 1)
                                    selected
                                @endif>1</option>
                                <option value="2" @if ($jabatan->level_jabatan == 2)
                                    selected
                                @endif>2</option>
                                <option value="3" @if ($jabatan->level_jabatan == 3)
                                    selected
                                @endif>3</option>
                                <option value="4" @if ($jabatan->level_jabatan == 4)
                                    selected
                                @endif>4</option>
                                <option value="5" @if ($jabatan->level_jabatan == 5)
                                    selected
                                @endif>5</option>
                            </select>
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
