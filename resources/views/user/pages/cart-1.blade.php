@extends('user.layouts.minimal')

@section('title', 'Register')

@section('content')



    <div class="d-flex justify-content-center full-height  align-items-center flex-column  container ">
        <div class="d-flex justify-content-start  align-items-start flex-column " >
            <div class="">
                <div class="hidden-md-up">
                    <div class="mt-3">
                        &nbsp;
                    </div>
                </div>
                <img  src="{{asset('static/assets/img/logo-dark.png')}}" alt="logo" width="150" height="auto">
                <br>
            </div>





            <div>
                <p class="t-c">
                    Create a Bitmanity account. If you have a facebook account, log into it for this process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a>
                </p>
            </div>
            <div>
                <div class="tab-pane padding-20 sm-no-padding active slide-left" id="tab1">
                    <div class="row row-same-height">
                        <div class="col-md-5 b-r b-dashed b-grey sm-b-b">
                            <div class="padding-30 sm-padding-5 sm-m-t-15 m-t-50">
                                <i class="fa fa-shopping-cart fa-2x hint-text"></i>
                                <h2>Your Bags are ready to check out!</h2>
                                <p>Discover goods you'll love from brands that inspire. The easiest way to open your own online store. Discover amazing stuff or open your own store for free!</p>

                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="padding-30 sm-padding-5">
                                <table class="table table-condensed">
                                    <tr>
                                        <td class="col-lg-8 col-md-6 col-sm-7 ">
                                            <a href="#" class="remove-item"><i class="pg-close"></i></a>
                                            <span class="m-l-10 font-montserrat fs-11 all-caps">Webarch UI Framework</span>
                                            <span class="m-l-10 ">Dashboard UI Pack</span>
                                        </td>
                                        <td class=" col-lg-2 col-md-3 col-sm-3 text-right">
                                            <span>Qty 1</span>
                                        </td>
                                        <td class=" col-lg-2 col-md-3 col-sm-2 text-right">
                                            <h4 class="text-primary no-margin font-montserrat">$27</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-lg-8 col-md-6 col-sm-7">
                                            <a href="#" class="remove-item"><i class="pg-close"></i></a>
                                            <span class="m-l-10 font-montserrat fs-11 all-caps">Pages UI Framework</span>
                                            <span class="m-l-10 ">Next Gen UI Pack</span>
                                        </td>
                                        <td class="col-lg-2 col-md-3 col-sm-3 text-right">
                                            <span>Qty 1</span>
                                        </td>
                                        <td class=" col-lg-2 col-md-3 col-sm-2 text-right">
                                            <h4 class="text-primary no-margin font-montserrat">$27</h4>
                                        </td>
                                    </tr>
                                </table>


                                <br>
                                <div class="row b-a b-grey no-margin">
                                    <div class="col-md-3 p-l-10 sm-padding-15 align-items-center d-flex">
                                        <div>
                                            <h5 class="font-montserrat all-caps small no-margin hint-text bold">Discount (10%)</h5>
                                            <p class="no-margin">$10</p>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-middle sm-padding-15 align-items-center d-flex">
                                        <div>
                                            <h5 class="font-montserrat all-caps small no-margin hint-text bold">coupon</h5>
                                            <p class="no-margin">$0</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-right bg-primary padding-10">
                                        <h5 class="font-montserrat all-caps small no-margin hint-text text-white bold">Total</h5>
                                        <h4 class="no-margin text-white">$44</h4>
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