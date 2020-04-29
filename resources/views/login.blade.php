<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SIPJABS | Login</title>
  <link rel="icon" href="{{ asset('asset/images/logo-telu.png') }}">

  <!-- Bootstrap -->
  <link href="{{ asset('asset/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('asset/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{ asset('asset/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{ asset('asset/build/css/custom.min.css') }}" rel="stylesheet">

</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Login Form</h1>
            {{-- Notifikasi jika gagal login --}}
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    {{ session('error') }} 
            </div>
            @endif
            <div>
              <input type="text" class="form-control" placeholder="Username" required="" name="username" value="{{ old('username') }}"/>
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" required="" name="password" value="{{ old('password') }}"/>
            </div>
            <div>
              <button class="btn btn-default submit" >Log in</button>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-magnet"></i> SIPJABS</h1>
                <p>Sistem Pengawakan Jabatan Struktural</p>
                <p></p>
                <p>©2020 Direktorat Sumber Daya Manusia Telkom University</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="{{ asset('asset/vendors/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('asset/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- Custom Theme Scripts -->
  <script src="{{ asset('asset/build/js/custom.min.js') }}"></script>
</body>

</html>