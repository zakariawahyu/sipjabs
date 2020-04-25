  <!-- jQuery -->
  <script src="{{ asset('asset/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Select2 -->
  <script src="{{ asset('asset/vendors/select2/js/select2.full.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('asset/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset('asset/vendors/fastclick/lib/fastclick.js') }}"></script>
  <!-- NProgress -->
  <script src="{{ asset('asset/vendors/nprogress/nprogress.js') }}"></script>
  <!-- Chart.js -->
  <script src="{{ asset('asset/vendors/Chart.js/dist/Chart.min.js') }}"></script>
  <!-- gauge.js -->
  <script src="{{ asset('asset/vendors/gauge.js/dist/gauge.min.js') }}"></script>
  <!-- bootstrap-progressbar -->
  <script src="{{ asset('asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
  <!-- iCheck -->
  <script src="{{ asset('asset/vendors/iCheck/icheck.min.js') }}"></script>
  <!-- Skycons -->
  <script src="{{ asset('asset/vendors/skycons/skycons.js') }}"></script>
  <!-- Flot -->
  <script src="{{ asset('asset/vendors/Flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('asset/vendors/Flot/jquery.flot.pie.js') }}"></script>
  <script src="{{ asset('asset/vendors/Flot/jquery.flot.time.js') }}"></script>
  <script src="{{ asset('asset/vendors/Flot/jquery.flot.stack.js') }}"></script>
  <script src="{{ asset('asset/vendors/Flot/jquery.flot.resize.js') }}"></script>
  <!-- Flot plugins -->
  <script src="{{ asset('asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
  <script src="{{ asset('asset/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
  <script src="{{ asset('asset/vendors/flot.curvedlines/curvedLines.js') }}"></script>
  <!-- DateJS -->
  <script src="{{ asset('asset/vendors/DateJS/build/date.js') }}"></script>
  <!-- JQVMap -->
  <script src="{{ asset('asset/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
  <script src="{{ asset('asset/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script src="{{ asset('asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{ asset('asset/vendors/moment/min/moment.min.js') }}"></script>
  <script src="{{ asset('asset/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

  <!-- Custom Theme Scripts -->
  <script src="{{ asset('asset/build/js/custom.min.js') }}"></script>

    <!-- PNotify -->
  <script src="{{ asset('asset/vendors/pnotify/dist/pnotify.js') }}"></script>
  <script src="{{ asset('asset/vendors/pnotify/dist/pnotify.buttons.js') }}"></script>
  <script src="{{ asset('asset/vendors/pnotify/dist/pnotify.nonblock.js') }}"></script>



<script>
// untuk dropdown sorting biar form om submit
	$('#order_by').on('change', function() {
	  $('#product_filter_form').submit();	  	  
  });

// untuk dropdown show biar form om submit
  $('#show').on('change', function() {
	  $('#product_filter_form').submit();	  	  
  });

</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>

{{-- script show pegawai form filter --}}
<script>
  $('body').on('click', '.btn-show', function(event){
    event.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title');

    $('#myModalTitle').text(title);
    $('#model-btn-save').addClass('hide');

    $.ajax({
      url : url,
      dataType : 'html',
      success : function(response) {
        $('#modal-body-show').html(response)
      }
    });

    $('#modal').modal('show');
  });
</script>
{{-- end script show pegawai form filter --}}

{{-- script show pegawai form cart --}}
<script>
  $('body').on('click', '.btn-show-cart', function(event){
    event.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title');

    $('#myModalTitle').text(title);
    $('#model-btn-save').addClass('hide');

    $.ajax({
      url : url,
      dataType : 'html',
      success : function(response) {
        $('#modal-body-show').html(response)
      }
    });

    $('#modal').modal('show');
  });
</script>
{{-- end script show pegawai form cart --}}


{{-- script notification --}}
@if (session('error'))
<script>
  new PNotify({
      title: 'Error',
      text: '{{ session('error') }}',
      type: 'error',
      styling: 'bootstrap3'
  });
</script>
@endif

@if (session('succes'))
<script>
  new PNotify({
      title: 'Sukses',
      text: '{{ session('succes') }}',
      type: 'success',
      styling: 'bootstrap3'
  });
</script>
@endif
{{-- end script notification --}}

