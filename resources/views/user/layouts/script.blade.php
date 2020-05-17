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

  <!-- Datatables -->
  <script src="{{ asset('asset/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('asset/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ asset('asset/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('asset/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
  <script src="{{ asset('asset/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
  <script src="{{ asset('asset/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('asset/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('asset/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
  <script src="{{ asset('asset/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
  <script src="{{ asset('asset/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('asset/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
  <script src="{{ asset('asset/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>



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

{{-- script show pegawai form filter, cart and tallent--}}
<script>
  $('body').on('click', '.btn-show, .btn-show-cart, .btn-show-tallent', function(event){
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
{{-- script show pegawai form filter, cart and tallent --}}

{{-- script show edit and reset password --}}
<script>
  $('body').on('click', '.btn-edit-user, .btn-reset-pass', function(event){
    event.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title');

    $('#myModalTitle').text(title);
    $('#model-btn-save').addClass('hide');
    $('#model-btn-close').addClass('hide');

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
{{-- end script show edit and reset password  --}}


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

<script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('user.filter.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

});
</script>


