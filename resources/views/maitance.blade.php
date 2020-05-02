<!DOCTYPE html>
<html lang="en">

<head>
	<title>SIPJABS | Maitance</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('asset/images/logo-telu.png') }}" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/maitance/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/maitance/fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/maitance/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/maitance/css/main.css') }}">
	<!--===============================================================================================-->
</head>

<body>


	<div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-55 p-b-35 respon1">
		<span></span>
		<div class="flex-col-c p-t-50 p-b-50">
			<h3 class="l1-txt1 txt-center p-b-10">
				Im Sorry
			</h3>

			<p class="txt-center l1-txt2 p-b-60">
				Our website is under construction
			</p>

			<div class="flex-w flex-c cd100 p-b-82">
				<div class="flex-col-c-m size2 how-countdown">
					<span class="l1-txt3 p-b-9 hours">15</span>
					<span class="s1-txt1">Hours</span>
				</div>

				<div class="flex-col-c-m size2 how-countdown">
					<span class="l1-txt3 p-b-9 minutes">50</span>
					<span class="s1-txt1">Minutes</span>
				</div>

				<div class="flex-col-c-m size2 how-countdown">
					<span class="l1-txt3 p-b-9 seconds">39</span>
					<span class="s1-txt1">Seconds</span>
				</div>
			</div>

			<button class="flex-c-m s1-txt2 size3 how-btn" data-toggle="modal" data-target="#subscribe">
				by WHO AM I TEAM
			</button>
		</div>

		<span class="s1-txt3 txt-center">
			Sistem Pengawakan Jabatan Struktural
			<br>
			©2020 Direktorat Sumber Daya Manusia Telkom University
		</span>

	</div>

	<!--===============================================================================================-->
	<script src="{{ asset('asset/maitance/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('asset/maitance/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('asset/maitance/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

	<script src="{{ asset('asset/maitance/vendor/countdowntime/moment.min.js') }}"></script>
	<script src="{{ asset('asset/maitance/vendor/countdowntime/moment-timezone.min.js') }}"></script>
	<script src="{{ asset('asset/maitance/vendor/countdowntime/moment-timezone-with-data.min.js') }}"></script>
	<script src="{{ asset('asset/maitance/vendor/countdowntime/countdowntime.js') }}"></script>
	<script>
		$('.cd100').countdown100({
			// Set Endtime here
			// Endtime must be > current time
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeHours: 23,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: ""
			// ex:  timeZone: "America/New_York", can be empty
			// go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
	<!--===============================================================================================-->
	<script src="{{ asset('asset/maitance/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	

</body>

</html>