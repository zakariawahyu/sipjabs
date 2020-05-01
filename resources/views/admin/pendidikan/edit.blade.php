
    <div class="" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Edit Pendidikan</h2>
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
                      <form action="{{ route('admin.pendidikan.update', $pendidikan->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Jenjang Pendidikan</label>
                            <select name="jenjang" class="form-control select2">
                                    <option value="" selected disabled>Pilih Jenjang Pendidikan</option>
                                @foreach ($jenjang as $j)
                                    <option value="{{ $j->jenjang_pendidikan }}" @if ($pendidikan->jenjang_pendidikan == $j->jenjang_pendidikan)
                                        selected
                                    @endif>{{ $j->jenjang_pendidikan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" value="{{ $pendidikan->jurusan }}">
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
