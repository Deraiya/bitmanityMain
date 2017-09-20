



@extends('user.layouts.master')

@section('title', 'Cart')

@section('css')
    <style>
        ::-moz-selection { /* Code for Firefox */
            color: #fff;
            background: #0CB4CE;
        }

        ::selection {
            color: #fff;
            background: #0CB4CE;
        }
    </style>
@endsection('css')


@section('content')
    <div class=" container container-fixed-lg">
        <div id="rootwizard" class="m-t-50">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm" role="tablist" data-init-reponsive-tabs="dropdownfx">
                <li class="nav-item">
                    <a class="active" data-toggle="tab" href="#tab1" role="tab"><i class="fa fa-shopping-cart tab-icon"></i> <span>Your cart</span></a>
                </li>
                <li class="nav-item">
                    <a class="" data-toggle="tab" href="#tab2" role="tab"><i class="fa fa-truck tab-icon"></i> <span>Shipping information</span></a>
                </li>
                <li class="nav-item">
                    <a class="" data-toggle="tab" href="#tab3" role="tab"><i class="fa fa-credit-card tab-icon"></i> <span>Payment details</span></a>
                </li>
                <li class="nav-item">
                    <a class="" data-toggle="tab" href="#tab4" role="tab"><i class="fa fa-check tab-icon"></i> <span>Summary</span></a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
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
                                            <div class="input-group-addon d-flex">
                                                <select class="cs-select cs-skin-slide cs-transparent" data-init-plugin="cs-select">
                                                    <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                                                    <option data-countryCode="US" value="1">USA (+1)</option>
                                                    <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                    <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                    <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                    <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                    <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                    <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                    <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                    <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                    <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                    <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                    <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                    <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                    <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                    <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                    <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                    <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                    <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                    <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                    <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                    <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                    <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                    <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                    <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                    <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                    <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                    <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                    <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                    <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                    <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                    <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                    <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                    <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                    <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                    <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                    <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                    <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                    <option data-countryCode="CN" value="86">China (+86)</option>
                                                    <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                    <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                    <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                    <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                    <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                    <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                    <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                    <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                    <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                    <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                    <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                    <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                    <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                    <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                    <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                    <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                    <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                    <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                    <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                    <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                    <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                    <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                    <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                    <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                    <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                    <option data-countryCode="FR" value="33">France (+33)</option>
                                                    <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                    <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                    <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                    <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                    <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                    <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                    <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                    <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                    <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                    <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                    <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                    <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                    <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                    <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                    <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                    <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                    <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                    <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                    <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                    <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                    <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                    <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                    <option data-countryCode="IN" value="91">India (+91)</option>
                                                    <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                    <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                    <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                    <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                    <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                    <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                    <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                    <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                    <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                    <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                    <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                    <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                    <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                    <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                    <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                    <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                    <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                    <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                    <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                    <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                    <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                    <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                    <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                    <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                    <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                    <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                    <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                    <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                    <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                    <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                    <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                    <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                    <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                    <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                    <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                    <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                    <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                    <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                    <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                    <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                    <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                    <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                    <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                    <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                    <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                    <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                    <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                    <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                    <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                    <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                    <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                    <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                    <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                    <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                    <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                    <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                    <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                    <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                    <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                    <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                    <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                    <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                    <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                    <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                    <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                    <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                    <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                    <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                    <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                    <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                    <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                    <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                    <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                    <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                    <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                    <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                    <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                    <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                    <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                    <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                    <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                    <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                    <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                    <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                    <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                    <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                    <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                    <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                    <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                    <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                    <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                    <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                    <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                    <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                    <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                    <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                    <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                    <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                    <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                    <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                    <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                    <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                    <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                    <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                    <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                    <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                    <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                    <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                    <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                    <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                    <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                    <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                    <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                    <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                    <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                    <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                    <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                    <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                    <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                    <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                    <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                    <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                    <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                    <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                    <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                    <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                    <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                    <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                                </select>
                                            </div>
                                            <div class="form-input-group flex-1">
                                                <label>Project</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab4">
                    <h1>Thank you.</h1>
                </div>
                <div class="padding-20 sm-padding-5 sm-m-b-20 sm-m-t-20 bg-white clearfix">
                    <ul class="pager wizard no-style">
                        <li class="next">
                            <button class="btn btn-primary btn-cons btn-animated from-left fa fa-truck pull-right" type="button">
                                <span>Next</span>
                            </button>
                        </li>
                        <li class="next finish hidden">
                            <button class="btn btn-primary btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
                                <span>Finish</span>
                            </button>
                        </li>
                        <li class="previous first hidden">
                            <button class="btn btn-default btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
                                <span>First</span>
                            </button>
                        </li>
                        <li class="previous">
                            <button class="btn btn-default btn-cons pull-right" type="button">
                                <span>Previous</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="wizard-footer padding-20 bg-master-light">
                    <p class="small hint-text pull-left no-margin">
                        The Top Content Is Soley Created using pages UI Elements such as Invoice, Tabs, Form Layouts etc. and are prior for representation Purpose Only.
                    </p>
                    <div class="pull-right">
                        <img src="{{asset('static/assets/img/logo-dark.png')}}" alt="logo" data-src="{{asset('static/assets/img/logo-dark.png')}}" data-src-retina="{{asset('assets/img/logo-dark.png')}}" width="100" height="auto">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')

@section('js')




@endsection('js')