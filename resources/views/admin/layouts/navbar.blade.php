      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                  aria-expanded="false">
                  @if (Auth::user()->url_foto =='')
                    <img src="{{ asset('asset/images/user.png') }}" alt="">{{ Auth::user()->username }}
                  @else
                    <img src="{{ asset('asset/images/'.Auth::user()->url_foto) }}" alt="">{{ Auth::user()->username }}
                  @endif
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="{{ route('admin.profile.index') }}"><i class="fa fa-user pull-right"></i> Profile</a></li>
                  <li><a href="{{ route('helpadmin') }}"><i class="fa fa-info-circle pull-right"></i> Help</a></li>
                  <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->