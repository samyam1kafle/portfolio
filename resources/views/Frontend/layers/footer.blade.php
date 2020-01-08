@section('footer')
    <!--========== FOOTER ==========-->
    <footer class="footer">
        <div class="content container">
            <div class="row">

                <div class="col-xs-12 text-right sm-text-left">
                    <img class="footer-logo" src="{{asset('uploads/logo/signature.png')}}" alt="Portfolio Logo"
                         style="width:280px;">
                </div>
            </div>
            <!--// end row -->
        </div>
    </footer>
    <!--========== END FOOTER ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="{{asset('FrontEnd/vendor/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('FrontEnd/vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('FrontEnd/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="{{asset('FrontEnd/vendor/jquery.easing.js')}}" type="text/javascript"></script>
    <script src="{{asset('FrontEnd/vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
    <script src="{{asset('FrontEnd/vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('FrontEnd/vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('FrontEnd/vendor/jquery.parallax.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('FrontEnd/vendor/jquery.appear.js')}}" type="text/javascript"></script>
    <script src="{{asset('FrontEnd/vendor/masonry/jquery.masonry.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('FrontEnd/vendor/masonry/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="{{asset('FrontEnd/js/layout.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('FrontEnd/js/components/progress-bar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('FrontEnd/js/components/masonry.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('FrontEnd/js/components/wow.min.js')}}" type="text/javascript"></script>

    {{--Toastr--}}
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
    <!-- END BODY -->
    </html>
@endsection