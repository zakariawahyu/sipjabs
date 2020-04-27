      <div class="col-md-3 left_col menu_fixed">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="/" class="site_title"><i class="glyphicon glyphicon-magnet"></i>
              <span>SIPJABS</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{ asset('asset/images/user.png') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Selamat datang,</span>
              <h2>{{ Auth::user()->username }}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="/admin"><i class="fa fa-home"></i> Dashboard</a></li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Management</h3>
              <ul class="nav side-menu">
                <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-users"></i> Data Users</a></li>
                <li><a href="{{ route('admin.pegawai.index') }}"><i class="fa fa-database"></i> Data Pegawai</a></li>
                <li><a href="{{ route('admin.tallent.index') }}"><i class="fa fa-list"></i> Data Tallent</a></li>
                <li><a href="#"><i class="fa fa-newspaper-o"></i> Jabatan Struktural <span
                      class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('admin.unitkerja.index') }}">Data Unit Kerja</a></li>
                    <li><a href="{{ route('admin.jabatan.index') }}">Data Jabatan</a></li>
                    <li><a href="{{ route('admin.unitbagian.index') }}">Data Unit Bagian</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <span>SIPJABS V1.0</span>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>