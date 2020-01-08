@extends('Frontend.layers.master')
@section('section')
    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">


    <!--========== SLIDER ==========-->
    <div class="promo-block parallax-window" data-parallax="scroll"
         data-image-src="{{asset('uploads/'.$admin->image)}}">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="promo-block-divider">
                        <h1 class="promo-block-title">{{$admin->name}}</h1>
                        <p class="promo-block-text">Laravel developer </p>
                    </div>
                    <ul class="list-inline">
                        <li><a href="https://www.facebook.com/bornride9" class="social-icons"><i
                                        class="icon-social-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/sam_yam_/" class="social-icons"><i
                                        class="icon-social-instagram"></i></a></li>
                        <li><a href="https://github.com/samyam1kafle" class="social-icons"><i class="icon-social-github"></i></a></li>
                        {{--<li><a href="#" class="social-icons"><i class="icon-social-behance"></i></a></li>--}}
                        <li><a href="https://www.linkedin.com/in/samyam-kafle-1b46b9160/" class="social-icons"><i
                                        class="icon-social-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!--========== SLIDER ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- About -->
    <div id="about">
        <div class="container content-lg">
            <div class="row">
                <div class="col-sm-3 sm-margin-b-30">
                    <div class="text-right sm-text-left">
                        <h2 class="margin-b-0">Intro</h2>
                        <p>What I am all about.</p>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-1">
                    <div class="margin-b-60">
                        <p>{!! $admin->introduction !!}</p>
                    </div>

                    <!-- Progress Box -->
                    @foreach($skills as $skill)
                        <div class="progress-box">
                            <h5>{{$skill->name}} <span class="color-heading pull-right"></span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="100"></div>
                            </div>
                        </div>
                @endforeach
                <!-- End Progress Box -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End About -->

    <!-- Experience -->
    <div id="experience">
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">Experience</h2>
                            {{--<p>Worked As</p>--}}
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="row row-space-2 margin-b-4">
                            @foreach($exp as $ex)
                                <div class="col-md-4 md-margin-b-4">
                                    <div class="service" data-height="height">
                                        <div class="service-element">
                                            <i class="service-icon icon-chemistry"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>{{$ex->name}}</h3>
                                            <h6>For : {{$ex->worked_for}} | As : {{$ex->position}}</h6>

                                            <h6>From : {{$ex->worked_from}} | To : {{$ex->worked_to}}</h6>
                                            <p class="margin-b-5">{!! $ex->description !!}</p>
                                        </div>
                                        {{--<a href="#" class="content-wrapper-link"></a>--}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--// end row -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Experience -->

    <!-- Work -->
    <div id="work">
        <div class="container content-lg">
            <div class="row">
                <div class="col-sm-3 sm-margin-b-30">
                    <div class="text-right sm-text-left">
                        <h2 class="margin-b-0">Works</h2>
                        <p>Some links of the sites live.
                        </p>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-1">
                    <!-- Masonry Grid -->
                    <div class="masonry-grid row row-space-2">
                        <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>

                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-4">
                            <!-- Work -->@foreach($works as $work)
                                <div class="work work-popup-trigger">
                                    <h5><a href="">{{$work->domain}}</a></h5>

                                </div>
                        @endforeach

                            @if($works->count() == null)
                                <div class="work work-popup-trigger">
                                    <h4>There are no any projects live on the server right now.</h4>

                                </div>
                                @endif
                        <!-- End Work -->
                        </div>

                    </div>
                    <!-- End Masonry Grid -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Work -->

    <!-- Contact -->
    <div id="contact">
        <div class="bg-color-sky-light">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">Contacts</h2>
                            <p>Hire me.</p>
                        </div>
                    </div>
                    @foreach($contacts as $contact)
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 md-margin-b-30">
                                    <h5>Primary Location</h5>
                                    <a href="#">{{$contact->location_1}}</a>
                                    <hr>
                                    <h6>Secondary Location</h6>
                                    <a href="#">{{$contact->location_2}}</a>
                                </div>
                                <div class="col-md-3 col-xs-6 md-margin-b-30">
                                    <h5>Mobile </h5>
                                    <a href="#">{{$contact->mobile}}</a>
                                    <hr>
                                    <h6>Alt Mobile </h6>
                                    <a href="#">{{$contact->landline}}</a>

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <h5>Primary Email</h5>
                                    <a href="mailto:#">{{$contact->primary_email}} </a>
                                    <hr>
                                    <h6>Secondary Email</h6>
                                    <a href="mailto:#">{{$contact->secondary_email}}
                                    </a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Contact -->
    <!--========== END PAGE LAYOUT ==========-->


@endsection