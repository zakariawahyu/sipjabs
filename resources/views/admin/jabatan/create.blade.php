
    <div class="" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Tambah Jabatan</h2>
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
                      <form action="{{ route('admin.jabatan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Jabatan</label>
                            <input type="text" required class="form-control" placeholder="Masukkan Jabatan" name="jabatan">
                        </div>
                        <div class="form-group">
                            <label>Level Jabatan</label>
                            <select class="form-control select2" name="level">
                                <option disabled selected>Pilih Level</option>
                                @foreach ($leveljabatan as $lb)
                                    <option value="{{ $lb->level_jabatan }}">{{ $lb->level_jabatan }}</option>
                                @endforeach
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
