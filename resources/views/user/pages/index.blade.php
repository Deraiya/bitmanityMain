@extends('user.layouts.master')

@section('title', 'Home')


@section('content')
    <div class="social-wrapper">
        <div class="social" data-pages="social">
            <!-- START JUMBOTRON -->

            <div class="fadeOut owl-carousel owl-theme">
                <div class="item">

                    <div class="jumbotron " data-pages="parallax" data-social="cover">
                        <div class="cover-photo">
                            <img alt="Cover photo" src="{{asset('static/assets/img/carso.jpg')}}"/>
                        </div>

                        {{--<div class=" container container-fixed-lg sm-p-l-0 sm-p-r-0">--}}
                            {{--<div class="inner">--}}
                                {{--<div class="pull-bottom bottom-left  sm-p-l-15" style="margin-bottom: 150px">--}}
                                    {{--<h1 class="b-c bold no-margin">Its Huge</h1>--}}
                                    {{--<a class="bt-btn bt-btn-primary " href="#">Shop Now</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>

                </div>
                <div class="item">
                    <div class="jumbotron" data-pages="parallax" data-social="cover">
                        <div class="cover-photo">
                            <img alt="Cover photo" src="{{asset('static/assets/img/carso2.jpg')}}"/>
                        </div>
                        {{--<div class=" container    container-fixed-lg sm-p-l-0 sm-p-r-0">--}}
                            {{--<div class="inner">--}}
                                {{--<div class="pull-bottom bottom-left  sm-p-l-15" style="margin-bottom: 150px">--}}
                                    {{--<h1 class="w-c bold no-margin">Its Huge</h1>--}}
                                    {{--<a class="bt-btn bt-btn-primary " href="#">Shop Now</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>

                </div>

            </div>

        </div>
        <!-- /container -->
    </div>
    <!-- START CONTAINER FLUID -->
    <div class=" container   container-fixed-lg">
        <div class="card card-transparent">
            <div class="card-header d-flex justify-content-start">
                <div class="card-title" >
                    <h5 style="" class="t-c bold font-montserrat">Featured Products</h5>
                </div>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-default" style="border: none">
                            <div class="card-header" style="padding: 0;">
                                <div style="height: 220px;overflow: hidden">
                                    <img alt="Person photo" class="ar-1-1" src="{{asset('static/assets/img/shop/products/03.jpg')}}">
                                </div>

                            </div>
                            <div class="card-block">
                                <div style="margin-top: 24px;margin-bottom: 16px">
                                    <h5><span class="font-arial small bold t-c">Moto G5s Plus (Lunar Grey, 64GB)</span> </h5>
                                </div>

                                <div class="d-flex justify-content-between" style="margin-top: 0;margin-bottom: 0">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <i class="fa fa-heart r-c" style="font-size: 20px;"></i>
                                        </div>
                                        <div style="margin-right: 15px;margin-left: 15px">
                                            <i class="fa fa-shopping-cart" style="font-size: 20px;color: #9c9c9c"></i>
                                        </div>
                                        <div style="margin-right: 10px;margin-left: 10px">
                                            <i class="fa fa-share" style="font-size: 20px;color: #9c9c9c"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p style="font-size: 24px" class="t-c"><b><span>&#8377</span>2,000</b></p>
                                    </div>

                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-default" style="border: none">
                            <div class="card-header" style="padding: 0;">
                                <div style="height: 220px;overflow: hidden">
                                    <img alt="Person photo" class="ar-1-1" src="{{asset('static/assets/img/shop/products/02.jpg')}}">
                                </div>

                            </div>
                            <div class="card-block">
                                <div style="margin-top: 24px;margin-bottom: 16px">
                                    <h5><span class="font-arial small bold t-c">Moto G5s Plus (Lunar Grey, 64GB)</span> </h5>
                                </div>

                                <div class="d-flex justify-content-between" style="margin-top: 0;margin-bottom: 0">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <i class="fa fa-heart r-c" style="font-size: 20px;"></i>
                                        </div>
                                        <div style="margin-right: 15px;margin-left: 15px">
                                            <i class="fa fa-shopping-cart" style="font-size: 20px;color: #9c9c9c"></i>
                                        </div>
                                        <div style="margin-right: 10px;margin-left: 10px">
                                            <i class="fa fa-share" style="font-size: 20px;color: #9c9c9c"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p style="font-size: 24px" class="t-c"><b><span>&#8377</span>2,000</b></p>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-default" style="border: none">
                            <div class="card-header" style="padding: 0;">
                                <div style="height: 220px;overflow: hidden">
                                    <img alt="Person photo" class="ar-1-1" src="{{asset('static/assets/img/shop/products/01.jpg')}}">
                                </div>

                            </div>
                            <div class="card-block">
                                <div style="margin-top: 24px;margin-bottom: 16px">
                                    <h5><span class="bold small t-c">Moto G5s Plus (Lunar Grey, 64GB)</span> </h5>
                                </div>

                                <div class="d-flex justify-content-between" style="margin-top: 0;margin-bottom: 0">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <i class="fa fa-heart" style="font-size: 20px;color: #9c9c9c"></i>
                                        </div>
                                        <div style="margin-right: 15px;margin-left: 15px">
                                            <i class="fa fa-shopping-cart text-primary" style="font-size: 20px;"></i>
                                        </div>
                                        <div style="margin-right: 10px;margin-left: 10px">
                                            <i class="fa fa-share" style="font-size: 20px;color: #9c9c9c"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p style="font-size: 24px" class="t-c"><b><span>&#8377</span>2,000</b></p>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- END CONTAINER FLUID -->
@endsection('content')

@section('js')
    <script>
        jQuery(document).ready(function ($) {
            $('.fadeOut').owlCarousel({
                items: 1,
                animateOut: 'fadeOut',
                loop: true,
                margin: 0,
                autoplay: true,
                autoplaySpeed: 1000,
                autoplayHoverPause: true,
            });

        });
    </script>

@endsection('js')