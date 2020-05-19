    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="/" class="site_title"><i class="glyphicon glyphicon-magnet"></i>
              <span>SIPJABS</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
            @if (Auth::user()->url_foto == '')
              <img src="{{ asset('asset/images/user.png') }}" alt="..." class="img-circle profile_img">
            @else
              <img src="{{ asset('asset/images/'.Auth::user()->url_foto) }}" alt="..." class="img-circle profile_img">
            @endif
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
                <li><a href="/user"><i class="fa fa-home"></i> Dashboard</a></li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Staffing</h3>
              <ul class="nav side-menu">
                <li><a href="{{ route('user.filter.index') }}"><i class="fa fa-search"></i> Cari Kandidat</a></li>
                <li><a href="{{ route('user.tallent.index') }}"><i class="fa fa-database"></i> Data Kandidat</a></li>
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