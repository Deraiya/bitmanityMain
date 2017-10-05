@extends('user.layouts.master')

@section('title', 'Home')
@section('css')
    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
        }

    </style>
    <style>


    </style>
@endsection('css')


@section('content')
    <div class="social-wrapper">
        <div class="social" data-pages="social">
            <!-- START JUMBOTRON -->





            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="jumbotron " >
                            <div class="d-flex justify-content-center ">
                                <img src="{{asset('custom/img/01.png')}}"/>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="jumbotron" >
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('custom/img/02.png')}}"/>
                            </div>

                        </div>
                    </div>


                </div>

                {{--<!-- If we need navigation buttons -->--}}
                {{--<div class="swiper-button-prev swiper-button-white" ></div>--}}
                {{--<div class="swiper-button-next swiper-button-white"></div>--}}

                {{--<div class="swiper-button-prev swiper-button-black ml-1" ></div>--}}
                {{--<div class="swiper-button-next swiper-button-black mr-1"></div>--}}


                <div class="swiper-pagination"></div>


            </div>











        </div>
        <!-- /container -->
    </div>
    <!-- START CONTAINER FLUID -->
    <div class="container container-fixed-lg">
        <div class="card card-transparent">
            <div class="card-header d-flex justify-content-start">
                <div class="card-title" >
                    <h5 style="" class="t-c bold font-montserrat">Featured Products</h5>
                </div>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-container" style="overflow: hidden;" onMouseOver="show('arrow')" onMouseOut="hide('arrow')">
                            <div class="swiper-wrapper d-flex justify-content-center">
                                <div class="swiper-slide">
                                    <div style="width: 260px;height: 195px;">
                                        <img src="{{asset('static/assets/img/shop/single/01.jpg')}}" width="100%" height="100%">
                                    </div>

                                </div>
                                <div class="swiper-slide">

                                    <div style="width: 260px;height: 195px;">
                                        <img src="{{asset('static/assets/img/shop/single/th03.jpg')}}" width="100%" height="100%">
                                    </div>

                                </div>
                                <div class="swiper-slide">

                                    <div style="width: 260px;height: 195px;">
                                        <img src="{{asset('static/assets/img/shop/single/02.jpg')}}" width="100%" height="100%">
                                    </div>

                                </div>
                                <div class="swiper-slide">

                                    <div style="width: 260px;height: 195px;">
                                        <img src="{{asset('static/assets/img/shop/single/03.jpg')}}" width="100%" height="100%">
                                    </div>

                                </div>
                                <div class="swiper-slide">

                                    <div style="width: 260px;height: 195px;">
                                        <img src="{{asset('static/assets/img/shop/single/04.jpg')}}" width="100%" height="100%">
                                    </div>

                                </div>
                                <div class="swiper-slide">

                                    <div style="width: 260px;height: 195px;">
                                        <img src="{{asset('static/assets/img/shop/single/05.jpg')}}" width="100%" height="100%">
                                    </div>

                                </div>

                            </div>

                            <div  id="arrow"  style="visibility: hidden">
                                <button class="btn btn-default btn-cons swiper-button-prev swiper-button-black primary-c " style="min-width: 50px;width: 45px;height: 90px;border-radius: 0" type="button"><i class="fa fa-chevron-left"></i> </button>
                                <button class="btn btn-default btn-cons swiper-button-next swiper-button-black primary-c" style="min-width: 50px;width: 45px;height: 90px;border-radius: 0"  type="button"><i class="fa  fa-chevron-right"></i> </button>


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
        var mySwiper = new Swiper ('.swiper-container', {

            direction: 'horizontal',
            slidesPerView: 1,
            pagination: '.swiper-pagination',
            paginationClickable: true,

            effect: 'fade',
            loop: true,
            centeredSlides: true,
            autoplay: 5000,
            autoplayDisableOnInteraction: false



        })
    </script>

    <script>
        var swiper = new Swiper('.product-container', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            slidesPerView: 4,

        });
    </script>

    <script>
        function show(id) {
            document.getElementById(id).style.visibility = "visible";
        }
        function hide(id) {
            document.getElementById(id).style.visibility = "hidden";
        }
    </script>

@endsection('js')