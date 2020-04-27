@extends('user.layouts.master')

@section('title', 'SIPJABS | Dashboard')

@section('content')
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row top_tiles">
          <div class="animated flipInY col-md-4 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-users"></i></div>
              <div class="count">{{ $users->count() }}</div>
              <h3>Users</h3>
              <p>Lorem ipsum psdea itgum rixt.</p>
            </div>
          </div>
          <div class="animated flipInY col-md-4 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-database"></i></div>
              <div class="count">{{ $pegawai->count() }}</div>
              <h3>Pegawai</h3>
              <p>Lorem ipsum psdea itgum rixt.</p>
            </div>
          </div>
          <div class="animated flipInY col-md-4 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-list"></i></div>
              <div class="count">{{ $tallent->count() }}</div>
              <h3>Tallent</h3>
              <p>Lorem ipsum psdea itgum rixt.</p>
            </div>
          </div>
        </div>
        <!-- /top tiles -->

        <div class="row">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Transaction Summary <small>Weekly progress</small></h2>
                <div class="filter">
                  <div id="reportrange" class="pull-right"
                    style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="col-md-9 col-sm-12 col-xs-12">
                  <div class="demo-container" style="height:280px">
                    <div id="chart_plot_02" class="demo-placeholder"></div>
                  </div>
                  <div class="tiles">
                    <div class="col-md-4 tile">
                      <span>Total Sessions</span>
                      <h2>231.809</h2>
                      <span class="sparkline11 graph" style="height: 160px;">
                        <canvas width="200" height="60"
                          style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                      </span>
                    </div>
                    <div class="col-md-4 tile">
                      <span>Total Revenue</span>
                      <h2>231.809</h2>
                      <span class="sparkline22 graph" style="height: 160px;">
                        <canvas width="200" height="60"
                          style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                      </span>
                    </div>
                    <div class="col-md-4 tile">
                      <span>Total Sessions</span>
                      <h2>231.809</h2>
                      <span class="sparkline11 graph" style="height: 160px;">
                        <canvas width="200" height="60"
                          style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                      </span>
                    </div>
                  </div>

                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                  <div>
                    <div class="x_title">
                      <h2>Top Tallent</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <ul class="list-unstyled top_profiles scroll-view">
                      @foreach ($tallent as $tl)
                          
                      
                      <li class="media event">
                        <a class="pull-left border-aero profile_thumb">
                          <i class="fa fa-user aero"></i>
                        </a>
                        <div class="media-body">
                          <a class="title" href="#">{{ $tl->pegawai->nama_lengkap }}</a>
                          <p><strong>85 </strong> Lorem ipsum dolor sit amet. </p>
                          <p> <small>Lorem, ipsum.</small>
                          </p>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="x_panel">
              <div class="x_title">
                <h2>Top Profiles <small>Sessions</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                        class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item One Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item Three Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="x_panel">
              <div class="x_title">
                <h2>Top Profiles <small>Sessions</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                        class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item One Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item Three Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="x_panel">
              <div class="x_title">
                <h2>Top Profiles <small>Sessions</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                        class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item One Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
                <article class="media event">
                  <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Item Three Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection