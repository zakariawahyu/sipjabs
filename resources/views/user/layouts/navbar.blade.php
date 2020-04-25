<?php 
use App\Http\Controllers\Controller;
use App\Cart;
// mengambil data dari model
        $cart_model = new Cart();
        $carts = $cart_model->getCart();
?>  
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
                  @if ($carts !== "")
                  <span class="badge bg-green">{{ $carts->count() }}</span>
                  @else
                  <span class="badge bg-green">0</span>
                  @endif
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  @if ($carts !== "")
                      
                  @foreach ($carts as $ct)
                  <li>
                    <a>
                      @if ($ct->pegawai->jenis_kelamin == 'L')
                        <span class="image"><img src="{{ asset('asset/images/male.png') }}" alt="Profile Image" /></span>
                      @else
                        <span class="image"><img src="{{ asset('asset/images/female.png') }}" alt="Profile Image" /></span>
                      @endif
                      <span>
                        <span>{{ $ct->pegawai->nama_lengkap }}</span>
                      </span>
                      <span class="message">
                        {{ $ct->pegawai->jabatanstruktural->jabatan->nama_jabatan }} {{ $ct->pegawai->jabatanstruktural->unitbagian->nama_unitbagian }}
                      </span>
                    </a>
                  </li>
                  @endforeach
                  @else
                  <li><h3 class="text-center">Empty Cart</h3></li>
                  @endif
                  <li>
                    <div class="text-center">
                      <a href="{{ route('user.cart.index') }}" class="btn btn-success">
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