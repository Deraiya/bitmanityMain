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
                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab3">
                    <div class="row row-same-height">
                        <div class="col-md-5 b-r b-dashed b-grey ">
                            <div class="padding-30 sm-padding-5 sm-m-t-15 m-t-50">
                                <h2>We Secured Your Line</h2>
                                <p>Below is a sample page for your cart , Created using pages design UI Elementes</p>

                                <table class="table table-condensed">
                                    <tr>
                                        <td class=" col-md-9">
                                            <span class="m-l-10 font-montserrat fs-11 all-caps">Webarch UI Framework</span>
                                            <span class="m-l-10 ">Dashboard UI Pack</span>
                                        </td>
                                        <td class=" col-md-3 text-right">
                                            <span>Qty 1</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=" col-md-9">
                                            <span class="m-l-10 font-montserrat fs-11 all-caps">Pages UI Framework</span>
                                            <span class="m-l-10 ">Next Gen UI Pack</span>
                                        </td>
                                        <td class=" col-md-3 text-right">
                                            <span>Qty 1</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class=" col-md-3 text-right">
                                            <h4 class="text-primary no-margin font-montserrat">$27</h4>
                                        </td>
                                    </tr>
                                </table>
                                <p class="small">Invoice are issued on the date of despatch. Payment terms: Pre-orders: within 10 days of invoice date with 4% discount, from the 11th to the 30th day net. Re-orders: non-reduced stock items are payable net after 20 days. </p>
                                <p class="small">By pressing Pay Now You will Agree to the Payment <a href="#">Terms &amp; Conditions</a></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="padding-30 sm-padding-5">
                                <ul class="list-unstyled list-inline m-l-30">
                                    <li><a href="#" class="p-r-30 text-black">Credit card</a></li>
                                    <li><a href="#" class="p-r-30 text-black  hint-text">PayPal</a></li>
                                    <li><a href="#" class="p-r-30 text-black  hint-text">Wire transfer</a></li>
                                </ul>
                                <form role="form">
                                    <div class="bg-master-light padding-30 b-rad-lg">
                                        <h2 class="pull-left no-margin">Credit Card</h2>
                                        <ul class="list-unstyled pull-right list-inline no-margin">
                                            <li>
                                                <a href="#">
                                                    <img width="51" height="32" data-src-retina="{{asset('static/assets/img/form-wizard/visa2x.png')}}" data-src="{{asset('static/assets/img/form-wizard/visa.png')}}" class="brand" alt="logo" src="{{asset('static/assets/img/form-wizard/visa.png')}}">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="hint-text">
                                                    <img width="51" height="32" data-src-retina="{{asset('static/assets/img/form-wizard/amex2x.png')}}" data-src="{{asset('static/assets/img/form-wizard/amex.png')}}" class="brand" alt="logo" src="{{asset('static/assets/img/form-wizard/amex.png')}}">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="hint-text">
                                                    <img width="51" height="32" data-src-retina="{{asset('static/assets/img/form-wizard/mastercard2x.png')}}" data-src="{{asset('static/assets/img/form-wizard/mastercard.png')}}" class="brand" alt="logo" src="{{asset('static/assets/img/form-wizard/mastercard.png')}}">
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                        <div class="form-group form-group-default required m-t-25">
                                            <label>Card holder's name</label>
                                            <input type="text" class="form-control" placeholder="Name on the card" required>
                                        </div>
                                        <div class="form-group form-group-default required">
                                            <label>Card number</label>
                                            <input type="text" class="form-control" placeholder="8888-8888-8888-8888" required>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Expiration</label>
                                                <br>
                                                <select class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                                                    <option selected>Jan (01)</option>
                                                    <option>Feb (02)</option>
                                                    <option>Mar (03)</option>
                                                    <option>Apr (04)</option>
                                                    <option>May (05)</option>
                                                    <option>Jun (06)</option>
                                                    <option>Jul (07)</option>
                                                    <option>Aug (08)</option>
                                                    <option>Sep (09)</option>
                                                    <option>Oct (10)</option>
                                                    <option>Nov (11)</option>
                                                    <option>Dec (12)</option>
                                                </select>
                                                <select class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2 offset-md-4">
                                                <div class="form-group required">
                                                    <label>CVC Code</label>
                                                    <input type="text" class="form-control" placeholder="000" required>
                                                </div>
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