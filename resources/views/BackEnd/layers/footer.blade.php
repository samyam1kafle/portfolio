@section('footer')
    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-sm-none d-md-block">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{asset('BackEnd/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('BackEnd/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('BackEnd/dist/js/adminlte.js')}}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{asset('BackEnd/dist/js/demo.js')}}"></script>

    <!-- PAGE PLUGINS -->
    <!-- SparkLine -->
    <script src="{{asset('BackEnd/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jVectorMap -->
    <script src="{{asset('BackEnd/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('BackEnd/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{asset('BackEnd/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- ChartJS 1.0.2 -->
    <script src="{{asset('BackEnd/plugins/chartjs-old/Chart.min.js')}}"></script>

    <!-- PAGE SCRIPTS -->
    <script src="{{asset('BackEnd/dist/js/pages/dashboard2.js')}}"></script>

    <!-- DataTables -->
    <script src="{{asset('BackEnd/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('BackEnd/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
{{--CK Editor--}}
    <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>


    {{--Toastr Scripts--}}
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script>
        @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}")

        @endif



        @if(Session::has('delete'))
        toastr.info("{{Session::get('delete')}}")
        }
        @endif

        @if(Session::has('Error'))
        toastr.error("{{Session::get('Error')}}")

        @endif

    </script>
    </body>
    </html>

@endsection