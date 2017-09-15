@extends('user.layouts.master')

@section('title', 'Home')


@section('content')
    <div class="social-wrapper">
        <div class="social " data-pages="social">
            <!-- START JUMBOTRON -->

            <div class="fadeOut owl-carousel owl-theme">
                <div class="item">

                    <div class="jumbotron" data-pages="parallax" data-social="cover">
                        <div class="cover-photo">
                            <img alt="Cover photo" src="{{asset('static/assets/img/carso.jpg')}}"/>
                        </div>
                        <div class=" container    container-fixed-lg sm-p-l-0 sm-p-r-0">
                            <div class="inner">
                                <div class="pull-bottom bottom-left m-b-40 sm-p-l-15">
                                    <h5 class="no-margin text-black">welcome to pages social</h5>
                                    <h1 class="no-margin text-black"><span class="semi-bold">social</span> cover
                                    </h1>
                                    <a class="bt-btn bt-btn-primary " href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div class="jumbotron" data-pages="parallax" data-social="cover">
                        <div class="cover-photo">
                            <img alt="Cover photo" src="{{asset('static/assets/img/carso2.jpg')}}"/>
                        </div>
                        <div class=" container    container-fixed-lg sm-p-l-0 sm-p-r-0">
                            <div class="inner">
                                <div class="pull-bottom bottom-left m-b-40 sm-p-l-15">
                                    <h5 class="no-margin w-c">This Is Amazing</h5>
                                    <h1 class="no-margin w-c"><span class="semi-bold">It's</span> It</h1>
                                    <a class="bt-btn bt-btn-primary " href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


            <!-- END JUMBOTRON -->
            <div class=" container  container-fixed-lg sm-p-l-0 sm-p-r-0">
                <div class="feed">
                    <!-- START DAY -->
                    <div class="day" data-social="day">
                        <!-- START ITEM -->
                        <div class="card no-border bg-transparent full-width" data-social="item">
                            <!-- START CONTAINER FLUID -->
                            <div class="container-fluid p-t-30 p-b-30 ">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="container-xs-height">
                                            <div class="row-xs-height">
                                                <div class="social-user-profile col-xs-height text-center col-top">
                                                    <div class="thumbnail-wrapper d48 circular bordered b-white">
                                                        <img alt="Avatar" width="55" height="55"
                                                             data-src-retina="{{asset('static/assets/img/profiles/avatar_small2x.jpg')}}"
                                                             data-src="{{asset('static/assets/img/profiles/avatar.jpg')}}"
                                                             src="{{asset('static/assets/img/profiles/avatar.jpg')}}">
                                                    </div>
                                                    <br>
                                                    <i class="fa fa-check-circle text-success fs-16 m-t-10"></i>
                                                </div>
                                                <div class="col-xs-height p-l-20">
                                                    <h3 class="no-margin p-b-5">David Nester</h3>
                                                    <p class="no-margin fs-16">is excited about the new pages
                                                        design framework
                                                    </p>
                                                    <p class="hint-text m-t-5 small">San Fransisco Bay | CEO at
                                                        Pages.inc
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="no-margin fs-16">Hi My Name is David Nester, &amp; heres my
                                            new pages user profile page</p>
                                        <p class="hint-text m-t-5 small">I love reading people's about page
                                            especially those who are in the same industry as me.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="m-b-5 small">1,435 Mutual Friends</p>
                                        <ul class="list-unstyled ">
                                            <li class="m-r-10">
                                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                                    <img width="35" height="35"
                                                         alt="Profile Image"
                                                         src="{{asset('static/assets/img/profiles/1.jpg')}}">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                                    <img width="35" height="35"
                                                         alt="Profile Image"
                                                         src="{{asset('static/assets/img/profiles/2.jpg')}}">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                                    <img width="35" height="35"
                                                         alt="Profile Image"
                                                         src="{{asset('static/assets/img/profiles/3.jpg')}}">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                                    <img width="35" height="35"
                                                         alt="Profile Image"
                                                         src="{{asset('static/assets/img/profiles/4.jpg')}}">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                                    <img width="35" height="35"
                                                         alt="Profile Image" src="{{asset('static/assets/img/profiles/5.jpg')}}">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                                    <img width="35" height="35"
                                                         alt="Profile Image"
                                                         src="{{asset('static/assets/img/profiles/6.jpg')}}">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="thumbnail-wrapper d32 circular b-white m-r-5 b-a b-white">
                                                    <img width="35" height="35"
                                                         alt="Profile Image"
                                                         src="{{asset('static/assets/img/profiles/7.jpg')}}">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="thumbnail-wrapper d32 circular b-white">
                                                    <div class="bg-master text-center text-white">
                                                        <span>+34</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <br>
                                        <p class="m-t-5 small">More friends</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END CONTAINER FLUID -->
                        </div>
                        <!-- END ITEM -->

                    </div>
                    <!-- END DAY -->
                </div>
                <!-- END FEED -->
            </div>
            <!-- END CONTAINER FLUID -->
        </div>
        <!-- /container -->
    </div>
    <!-- START CONTAINER FLUID -->
    <div class=" container container-fixed-lg">
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
    <!-- END CONTAINER FLUID -->
@endsection('content')