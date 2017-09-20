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
            <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab2">
                <div class="row row-same-height">
                    <div class="col-md-5 b-r b-dashed b-grey ">
                        <div class="padding-30 sm-padding-5 sm-m-t-15 m-t-50">
                            <h2>Your Information is safe with us!</h2>
                            <p>We respect your privacy and protect it with strong encryption, plus strict policies . Two-step verification, which we encourage all our customers to use.</p>

                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="padding-30 sm-padding-5">
                            <form role="form">
                                <p>Name and Email Address</p>
                                <div class="form-group-attached">
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default required">
                                                <label>First name</label>
                                                <input type="text" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default">
                                                <label>Last name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-default required">
                                        <label>Email</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                                <br>
                                <p>Billing Address</p>
                                <div class="form-group-attached">
                                    <div class="form-group form-group-default required">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Current address" required>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default">
                                                <label>COUNTRY</label>
                                                <input type="text" value="INDIA" readonly class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default">
                                                <label>City</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-9">
                                            <div class="form-group form-group-default required">
                                                <label>State/Province</label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group form-group-default">
                                                <label>Zip code</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-default input-group">
                                        <div class="input-group-addon d-flex bg-primary">
                                            <div class="input-group-addon bg-primary w-c">
                                                (+91)
                                            </div>
                                        </div>
                                        <div class="form-input-group flex-1">
                                            <label>Phone Number</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
    </div>
@endsection('content')