@extends('user.layouts.master')

@section('title', 'Home')
@section('css')
    <style>
        .sidebar{
            will-change: min-height;
        }

        .sidebar__inner{
            transform: translate(0, 0); /* For browsers don't support translate3d. */
            transform: translate3d(0, 0, 0);
            will-change: position, transform;
        }

    </style>
    <link href="{{asset('static/assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('static/assets/plugins/jquery-metrojs/MetroJs.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('static/assets/plugins/codrops-dialogFx/dialog.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('static/assets/plugins/codrops-dialogFx/dialog-sandra.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('static/assets/plugins/owl-carousel/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('static/assets/plugins/jquery-nouislider/jquery.nouislider.css')}}" rel="stylesheet" type="text/css" media="screen" />

@endsection('css')


@section('content')

    <div class=" no-padding container-fixed-lg f2-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-transparent" >

                        <div class="card-block">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="col-lg-12">
                                        <div class="card-block pl-0">
                                            <h5 class="font-montserrat m-0 bold">FILTERS</h5>
                                        </div>

                                        <form class="" role="form">
                                            <h5 class="all-caps font-montserrat fs-12 m-b-20">Advance filters</h5>
                                            <div class="form-group form-group-default ">
                                                <label>Project</label>
                                                <input type="email" class="form-control" placeholder="Type of select a label">
                                            </div>
                                            <h5 class="all-caps font-montserrat fs-12 m-b-20 m-t-25">Advance filters</h5>
                                            <div class="radio radio-danger">
                                                <input type="radio" checked="checked" value="1" name="filter" id="asc">
                                                <label for="asc">Trending</label>
                                                <br>
                                                <input type="radio" checked="checked" value="1" name="filter" id="asc">
                                                <label for="asc">Best sellers</label>
                                                <br>
                                                <input type="radio" checked="checked" value="1" name="filter" id="asc">
                                                <label for="asc">Newest items</label>
                                                <br>
                                                <input type="radio" value="2" name="filter" id="views">
                                                <label for="views">Price: low to high</label>
                                                <br>
                                                <input type="radio" value="4" name="filter" id="latest">
                                                <label for="views">Price: high to low</label>
                                            </div>


                                            <button class="pull-right btn btn-danger btn-cons m-t-40">Apply</button>
                                        </form>

                                    </div>


                                </div>
                                <div class="col-lg-9">
                                    <div class="card-block d-flex ">
                                        <div class="col-lg-4">
                                            <div class="card card-default b-0" >
                                                <div class="card-block w-b p-0" style="height: 160px;">
                                                    <img style="width: 100%;height: 100%;object-fit: contain" src="{{asset('static/assets/img/shop/single/01.jpg')}}"  alt="">
                                                </div>
                                                <div class="card-block pt-2 pb-0 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <span class="icon-thumbnail bt-icon-thumbnail r-b w-c bold" style>4.3</span>
                                                    </div>
                                                    <div>
                                                        <h4 class="bold m-0"><span>&#8377;</span>20,000</h4>
                                                    </div>
                                                </div>
                                                <div class="card-block pb-0 pt-2" >
                                                    <p class="bold m-0">
                                                        ABS Vortex Leo Gaming Desktop  Intel ...
                                                    </p>
                                                </div>

                                                <div class="card-block pt-2 pb-1 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-heart-o semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="sl-bag semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-send-o semi-bold"></i>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card card-default b-0" >
                                                <div class="card-block w-b p-0" style="height: 160px;">
                                                    <img style="width: 100%;height: 100%;object-fit: contain" src="{{asset('static/assets/img/shop/products/02.jpg')}}"  alt="">
                                                </div>
                                                <div class="card-block pt-2 pb-0 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <span class="icon-thumbnail bt-icon-thumbnail r-b w-c bold" style>4.3</span>
                                                    </div>
                                                    <div>
                                                        <h4 class="bold m-0"><span>&#8377;</span>20,000</h4>
                                                    </div>
                                                </div>
                                                <div class="card-block pb-0 pt-2" >
                                                    <p class="bold m-0">
                                                        ABS Vortex Leo Gaming Desktop  Intel ...
                                                    </p>
                                                </div>

                                                <div class="card-block pt-2 pb-1 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-heart-o semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="sl-bag semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-send-o semi-bold"></i>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card card-default b-0" >
                                                <div claw="card-block f7-b p-0" style="height: 160px;">
                                                    <img style="width: 100%;height: 100%;object-fit: contain" src="{{asset('static/assets/img/shop/products/04.jpg')}}"  alt="">
                                                </div>
                                                <div class="card-block pt-2 pb-0 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <span class="icon-thumbnail bt-icon-thumbnail r-b w-c bold" style>4.3</span>
                                                    </div>
                                                    <div>
                                                        <h4 class="bold m-0"><span>&#8377;</span>20,000</h4>
                                                    </div>
                                                </div>
                                                <div class="card-block pb-0 pt-2" >
                                                    <p class="bold m-0">
                                                        ABS Vortex Leo Gaming Desktop  Intel ...
                                                    </p>
                                                </div>

                                                <div class="card-block pt-2 pb-1 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-heart-o semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="sl-bag semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-send-o semi-bold"></i>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-block d-flex ">
                                        <div class="col-lg-4">
                                            <div class="card card-default b-0" >
                                                <div claw="card-block f7-b p-0" style="height: 160px;">
                                                    <img style="width: 100%;height: 100%;object-fit: contain" src="{{asset('static/assets/img/shop/products/06.jpg')}}"  alt="">
                                                </div>
                                                <div class="card-block pt-2 pb-0 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <span class="icon-thumbnail bt-icon-thumbnail r-b w-c bold" style>4.3</span>
                                                    </div>
                                                    <div>
                                                        <h4 class="bold m-0"><span>&#8377;</span>20,000</h4>
                                                    </div>
                                                </div>
                                                <div class="card-block pb-0 pt-2" >
                                                    <p class="bold m-0">
                                                        ABS Vortex Leo Gaming Desktop  Intel ...
                                                    </p>
                                                </div>

                                                <div class="card-block pt-2 pb-1 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-heart-o semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="sl-bag semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-send-o semi-bold"></i>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card card-default b-0" >
                                                <div class="card-block w-b p-0" style="height: 160px;">
                                                    <img style="width: 100%;height: 100%;object-fit: contain" src="{{asset('static/assets/img/shop/products/07.jpg')}}"  alt="">
                                                </div>
                                                <div class="card-block pt-2 pb-0 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <span class="icon-thumbnail bt-icon-thumbnail r-b w-c bold" style>4.3</span>
                                                    </div>
                                                    <div>
                                                        <h4 class="bold m-0"><span>&#8377;</span>20,000</h4>
                                                    </div>
                                                </div>
                                                <div class="card-block pb-0 pt-2" >
                                                    <p class="bold m-0">
                                                        ABS Vortex Leo Gaming Desktop  Intel ...
                                                    </p>
                                                </div>

                                                <div class="card-block pt-2 pb-1 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-heart-o semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="sl-bag semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-send-o semi-bold"></i>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card card-default b-0" >
                                                <div claw="card-block f7-b p-0" style="height: 160px;">
                                                    <img style="width: 100%;height: 100%;object-fit: contain" src="{{asset('static/assets/img/shop/products/08.jpg')}}"  alt="">
                                                </div>
                                                <div class="card-block pt-2 pb-0 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <span class="icon-thumbnail bt-icon-thumbnail r-b w-c bold" style>4.3</span>
                                                    </div>
                                                    <div>
                                                        <h4 class="bold m-0"><span>&#8377;</span>20,000</h4>
                                                    </div>
                                                </div>
                                                <div class="card-block pb-0 pt-2" >
                                                    <p class="bold m-0">
                                                        ABS Vortex Leo Gaming Desktop  Intel ...
                                                    </p>
                                                </div>

                                                <div class="card-block pt-2 pb-1 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-heart-o semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="sl-bag semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-send-o semi-bold"></i>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-block d-flex ">
                                        <div class="col-lg-4">
                                            <div class="card card-default b-0" >
                                                <div claw="card-block f7-b p-0" style="height: 160px;">
                                                    <img style="width: 100%;height: 100%;object-fit: contain" src="{{asset('static/assets/img/shop/products/09.jpg')}}"  alt="">
                                                </div>
                                                <div class="card-block pt-2 pb-0 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <span class="icon-thumbnail bt-icon-thumbnail r-b w-c bold" style>4.3</span>
                                                    </div>
                                                    <div>
                                                        <h4 class="bold m-0"><span>&#8377;</span>20,000</h4>
                                                    </div>
                                                </div>
                                                <div class="card-block pb-0 pt-2" >
                                                    <p class="bold m-0">
                                                        ABS Vortex Leo Gaming Desktop  Intel ...
                                                    </p>
                                                </div>

                                                <div class="card-block pt-2 pb-1 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-heart-o semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="sl-bag semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-send-o semi-bold"></i>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card card-default b-0" >
                                                <div class="card-block w-b p-0" style="height: 160px;">
                                                    <img style="width: 100%;height: 100%;object-fit: contain" src="{{asset('static/assets/img/shop/products/10.jpg')}}"  alt="">
                                                </div>
                                                <div class="card-block pt-2 pb-0 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <span class="icon-thumbnail bt-icon-thumbnail r-b w-c bold" style>4.3</span>
                                                    </div>
                                                    <div>
                                                        <h4 class="bold m-0"><span>&#8377;</span>20,000</h4>
                                                    </div>
                                                </div>
                                                <div class="card-block pb-0 pt-2" >
                                                    <p class="bold m-0">
                                                        ABS Vortex Leo Gaming Desktop  Intel ...
                                                    </p>
                                                </div>

                                                <div class="card-block pt-2 pb-1 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-heart-o semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="sl-bag semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-send-o semi-bold"></i>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card card-default b-0" >
                                                <div claw="card-block f7-b p-0" style="height: 160px;">
                                                    <img style="width: 100%;height: 100%;object-fit: contain" src="{{asset('static/assets/img/shop/products/11.jpg')}}"  alt="">
                                                </div>
                                                <div class="card-block pt-2 pb-0 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <span class="icon-thumbnail bt-icon-thumbnail r-b w-c bold" style>4.3</span>
                                                    </div>
                                                    <div>
                                                        <h4 class="bold m-0"><span>&#8377;</span>20,000</h4>
                                                    </div>
                                                </div>
                                                <div class="card-block pb-0 pt-2" >
                                                    <p class="bold m-0">
                                                        ABS Vortex Leo Gaming Desktop  Intel ...
                                                    </p>
                                                </div>

                                                <div class="card-block pt-2 pb-1 d-flex justify-content-between align-content-center">
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-heart-o semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="sl-bag semi-bold"></i>
                                                        </h5>
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <i class="fa fa-send-o semi-bold"></i>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection('content')

@section('js')




@endsection('js')