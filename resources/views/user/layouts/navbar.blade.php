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
                  <img src="{{ asset('asset/images/user.png') }}" alt="">{{ Auth::user()->username }}
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="{{ route('user.profile.index') }}"><i class="fa fa-user pull-right"></i> Profile</a></li>
                  <li><a href="{{ route('helpuser') }}"><i class="fa fa-info-circle pull-right"></i> Help</a></li>
                  <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-shopping-cart"></i>
                  <span class="badge bg-green">1</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  {{-- @foreach ($carts as $ct) --}}
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>Zaka</span>
                        <span class="time">TPA Pegawai Tetap</span>
                      </span>
                      <span class="message">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, suscipit.
                      </span>
                    </a>
                  </li>
                  {{-- @endforeach --}}
                  <li>
                    <div class="text-center">
                      <a class="btn btn-success">
                        <strong>View Cart</strong>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->