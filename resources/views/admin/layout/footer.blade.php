<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>



{{-- --}}
<script src="{{ url('/design/adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url('/design/adminlte/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
{{--<scriptlass c="jlsbin" src="https://ajax.googeapis.com/ajax/libs/jquery/1/jquery.min.js"></scriptlass>--}}
{{--<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>--}}


{{--Start alert--}}

<script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
@include('sweet::alert')

<script src="{{ url('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script src="{{url('js/ckeditor.js')}}"></script>

{{--END alert--}}

{{--<script src="{{ url('/design/adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>--}}



<link rel="stylesheet"
      href="{{ url('design/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<script src="{{ url('design/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('design/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ url('design/adminlte/bower_components/datatables.net-bs/js/dataTables.buttons.min.js') }}"></script>
{{--<script src="{{ url('/vendor/datatables/buttons.server-side.js') }}"></script>--}}


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('/design/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ url('/design/adminlte/bower_components/morris.js/morris.min.js') }}"></script>
<script src="{{ url('/design/adminlte/bower_components/raphael/raphael.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ url('/design/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ url('/design/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ url('/design/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('/design/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url('/design/adminlte/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ url('/design/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ url('/design/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ url('/design/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ url('/design/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('/design/adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/design/adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('/design/adminlte/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/design/adminlte/dist/js/demo.js') }}"></script>
<script src="{{ url('/design/adminlte/jstree/jstree.js') }}"></script>
<script src="{{ url('/design/adminlte/jstree/jstree.wholerow.js') }}"></script>
<script src="{{ url('/design/adminlte/jstree/jstree.checkbox.js') }}"></script>

<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.ar.min.js"></script>
<link rel="stylesheet" type="text/css"
      href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>


{{--// for image showing--}}
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet"
      type="text/css"/>

{{--khalid JS--}}
<script src="{{ url("js/join.js")}}"> </script>



{{--changes--}}
{{-- @if(auth()->user()->stdstatus_id===21)

    <script>
        var body=document.getElementById('body');
        body.classList.add('sidebar-collapse');
    </script>

    @endif --}}


<script>

// document.getElementById("floor_delete").onclick = deleteFloor (); 

function deleteFloor (){
    
// alert('delete');
    Swal.fire({
        title: 'هل تريد الإستمرار?',
        text: "عند حذف هذا الطابق ستم حذف جميع الطاولات أيضا",
        icon: 'تحذير',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
};
</script>

</body>
</html>
