@extends('user.layouts.master')

@section('title', 'Home')

    @section('css')

    @endsection('css')


@section('content')

    <!-- START CONTAINER FLUID -->


    <div class=" no-padding container-fixed-lg bg-white" style="margin-bottom: 10px">
        <div class="container">
            <div class="row">
                <div class="card card-transparent">

                    <div class="card-block">
                        <div class="row m-1">

                            <div class="col-lg-6 no-padding">
                                &nbsp
                            </div>
                            <div class="col-lg-6 sm-no-padding d-flex flex-column">
                                <div>
                                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis bold ">Product Name</p>
                                    <h3 class="t-c mt-0 mb-0 bold">Seagate IronWolf 10TB NAS Hard Drive 7200 RPM </h3>
                                </div>

                                <div class="m-t-20">
                                    <div class="d-flex">
                                        <span class="icon-thumbnail bg-master-light pull-left t-c">4.3</span>
                                        <div class="flex-1 full-width overflow-ellipsis">
                                            <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis bold ">Reviews</p>
                                            <a href="#" class="no-margin overflow-ellipsis bold l-b-c"> 22 Customer Reviews</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-t-20">
                                    <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis bold ">PRICE</p>
                                    <h3 class="t-c bold m-0"><span>&#8377</span>2,000</h3>
                                </div>
                                <div class="m-t-20">
                                    <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis bold ">Description</p>
                                    <div class="t-c">
                                        <ul class="lg-icon" style="padding-left: 20px;">
                                            <li><span>Life isn’t about getting and having...</span></li>
                                            <li><span>Strive not to be a success... </span></li>
                                            <li><span>Whatever the mind of man can... </span></li>
                                            <li><span>Lorem ipsum dolor sit amet. </span></li>
                                            <li><span>Lorem ipsum dolor sit amet, consectetur.</span></li>
                                            <li><span>Lorem ipsum dolor sit amet.</span></li>
                                            <li><span>Lorem ipsum dolor. </span></li>
                                            <li><span>Lorem ipsum dolor sit.</span></li>
                                            <li><span>Lorem ipsum. </span></li>

                                        </ul>

                                    </div>
                                </div>
                                <div class="m-t-20 ">
                                    <div>
                                        <form role="form">
                                            <div class="d-flex flex-row ">
                                                <div class="form-group" style="line-height: 5.5">
                                                    <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis bold " style="padding-bottom: 5px;">QUANTITY</p>
                                                    <input type="text" class="form-control f5-b" value="1" style="height: 50px;width: 90px;margin-right: 20px;">
                                                </div>


                                                <div class="form-group" style="line-height: 6.7">
                                                    <button class="btn bt-btn-atc" style="height: 50px;width: 155px;font-weight: 700">Add to Cart</button>
                                                </div>

                                            </div>


                                        </form>
                                    </div>

                                </div>
                                <div class="m-t-10">
                                    <div class="d-flex flex-row justify-content-start">
                                        <div>
                                            <i class="fa fa-heart heart-d"></i> &nbsp;
                                        </div>
                                        <div>
                                            <h5 class="bold" style="line-height: 0">
                                                Add to wishlist
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



    <div class="no-padding">
            <div class="row">
                <div class="card card-transparent f7-b mb-0">
                    <div class="card-block pt-0 pb-0">
                        <div class="row m-1">


                                <div class="card card-transparent">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-linetriangle d-flex justify-content-center" data-init-reponsive-tabs="dropdownfx">
                                        <li class="nav-item">
                                            <a href="#" class="active t-c" data-toggle="tab" data-target="#fade1"><span>DETAIL</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" data-toggle="tab" class="t-c" data-target="#fade2"><span>REVIEW</span></a>
                                        </li>

                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content container f7-b">
                                        <div class="tab-pane  fade show active" id="fade1">
                                            <div class="row column-seperation">
                                                <div class="col-12 t-c">
                                                    <h3>
                                                        <span class="semi-bold">Sometimes</span> Small things in life means the most
                                                    </h3>

                                                    <p>Native boostrap tabs customized to Pages look and feel, simply changing class name you can change color as well as its animations</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab alias, aliquam aliquid, aspernatur commodi culpa deserunt distinctio earum enim facilis illo laborum magnam non numquam qui sequi tempora. Repellat?</p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi autem dolore dolores excepturi ipsam, laborum minima necessitatibus numquam perspiciatis praesentium tempore, unde voluptatum. A ab assumenda corporis dicta doloremque dolores doloribus eius eum, exercitationem facere, ipsam laudantium nostrum numquam obcaecati repudiandae rerum veniam voluptate? Deleniti doloribus ex itaque perspiciatis reprehenderit rerum saepe veritatis vero, voluptatibus? Cumque eligendi est fuga pariatur possimus quidem, quis recusandae. Ab architecto, beatae consequatur corporis distinctio eligendi expedita facilis in ipsa ipsum itaque laudantium minima neque, nihil pariatur tempore unde. Asperiores incidunt, itaque mollitia nihil nisi rerum veritatis voluptate? Delectus illum magni nulla quidem similique.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="fade2">
                                            <div class="row">
                                                <div class="col-lg-8 offset-lg-2 pl-0 pr-0">
                                                    <div class="form-group form-group-default" style="height: 90px;">
                                                        <label>Write a response</label>
                                                        <input type="text" class="form-control input-lg">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 offset-lg-2 pl-0 pr-0">
                                                    <div class="card card-transparent">
                                                        <div class="card-block no-padding">
                                                            <div id="card-advance" class="card card-default">
                                                                <div class="card-header">
                                                                    <div>
                                                                        <div class="profile-img-wrapper m-t-5 inline">
                                                                            <img width="35" height="35" data-src-retina="{{asset('static/assets/img/profiles/avatar_small2x.jpg')}}" data-src="{{asset('static/assets/img/profiles/avatar_small.jpg')}}" alt="" src="{{asset('static/assets/img/profiles/avatar_small.jpg')}}">
                                                                            <div class="chat-status available">
                                                                            </div>
                                                                        </div>
                                                                        <div class="inline m-l-10">
                                                                            <p class="small hint-text m-t-5 ">David Nest
                                                                                <br>4 hrs</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-block">
                                                                    <h5 class="semi-bold mt-0 t-c">Earned my first salary bonus for the best design of the year award.</h5>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 offset-lg-2 pl-0 pr-0">
                                                    <a href="index.html#" class="btn btn-block" style=" line-height: 50px;">Show all responses</a>
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
    <!-- END CONTAINER FLUID -->
@endsection('content')

@section('js')


@endsection('js')