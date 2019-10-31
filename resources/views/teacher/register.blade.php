<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="iANikzad">
    <title>UDEMA | Teachers Entry</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('css/icon_fonts/css/all_icons.min.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/skins/square/grey.css')}}" rel="stylesheet">
    <link href="{{asset('css/wizard.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

</head>

<body id="admission_bg">

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->

<div id="form_container" class="clearfix">
    <figure>
        <a href="index.html"><img src="{{asset('img/logo.png')}}" width="149" height="42" data-retina="true" alt=""></a>
    </figure>
    <div id="wizard_container">
        <div id="top-wizard">
            <div id="progressbar"></div>
        </div>
        <!-- /top-wizard -->
        <form name="example-1"  method="POST" action="{{route('teacher.register')}}">
            @csrf
            <input id="website" name="website" type="text" value="">
            <!-- Leave for security protection, read docs for details -->
            <div id="middle-wizard">
                <div class="step">
                    <div id="intro">
                        <figure><img src="{{asset('img/wizard_intro_icon.svg')}}" alt=""></figure>
                        <h1>Teachers Entry</h1>
                        <p>Exerci tibique eum cu, paulo appellantur et mei, ea partem urbanitas vim. His ei iusto nonumes atomorum. Mentitum pericula in nec. In eos habemus tibique. </p>
                        <p><strong>Mel erant legere iuvaret ea. At eum doctus voluptatibus, has id veritus constituam.</strong></p>
                    </div>
                </div>

                <div class="step">
                    <h3 class="main_question"><strong>1/4</strong>Please fill with your details</h3>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control required" placeholder="Username" value="{{old('username')}}">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Your Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control required" placeholder="Your Email" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone_number" class="form-control" placeholder="Your Telephone" value="{{old('phone_number')}}">
                    </div>
{{--                    <div class="form-group select">--}}
{{--                        <div class="styled-select">--}}
{{--                            <select class="required" name="education_apply" id="education_apply">--}}
{{--                                <option value="" selected="">Select your education level</option>--}}
{{--                                <option value="Less than high school">Less than high school</option>--}}
{{--                                <option value="High school diploma or equivalent">High school diploma or equivalent</option>--}}
{{--                                <option value="Some college no degree">Some college, no degree</option>--}}
{{--                                <option value="Bachelor degree">Bachelor’s degree</option>--}}
{{--                                <option value="Doctoral or professional degree">Doctoral or professional degree</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="form-group radio_input">
                        <label><input type="radio" value="Male" checked name="gender" class="icheck">Male</label>
                        <label><input type="radio" value="Female" name="gender" class="icheck">Female</label>
                    </div>
                </div>
                <!-- /step-->

                <div class="step">
                    <h3 class="main_question"><strong>2/4</strong>Please fill your personal info</h3>
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control required" placeholder="First name" value="{{old('first_name')}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="last_name" class="form-control required" placeholder="Last name" value="{{old('last_name')}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="age" class="form-control" placeholder="Age" value="{{old('age')}}">
                    </div>
                </div>
                <!-- /step-->



                <div class="step">
                    <h3 class="main_question"><strong>3/4</strong>Please fill your address</h3>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control required" placeholder="Address" value="{{old('address')}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" class="form-control required" placeholder="City" value="{{old('city')}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="zip_code" class="form-control required" placeholder="Zip code" value="{{old('zip_code')}}">
                    </div>
                    <div class="form-group">
                        <div class="styled-select">
                            <select class="required" name="continent">
                                <option value="" selected>Select your country</option>
                                <option value="Europe">Europe</option>
                                <option value="Asia">Asia</option>
                                <option value="North America">North America</option>
                                <option value="South America">South America</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /step-->

                <div class="submit step">
                    <div class="form-group select">
                        <div class="styled-select">
                            <select class="required" name="institution" id="education_apply">
                                <option value="">Please select your institution</option>
                                <option value="Schenectady" >Schenectady County Community College</option>
                                <option value="Belanger" >The Belanger School of Nursing</option>
                                <option value="Union College" >Union College</option>
                                <option value="Union Graduate College" >Union Graduate College</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group select">
                        <div class="styled-select">
                            <select class="required" name="department" id="education_apply2">
                                <option value="">Please select your institution</option>
                                <option value="Schenectady" >Schenectady County Community College</option>
                                <option value="Belanger" >The Belanger School of Nursing</option>
                                <option value="Union College" >Union College</option>
                                <option value="Union Graduate College" >Union Graduate College</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group select">
                        <div class="styled-select">
                            <select class="required" name="discipline" id="education_apply3">
                                <option value="">Please select your institution</option>
                                <option value="Schenectady" >Schenectady County Community College</option>
                                <option value="Belanger" >The Belanger School of Nursing</option>
                                <option value="Union College" >Union College</option>
                                <option value="Union Graduate College" >Union Graduate College</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group terms">
                        <input name="terms" type="checkbox" class="icheck required" value="yes">
                        <label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?</label>
                    </div>
                </div>
                <!-- /step-->
            </div>
            <!-- /middle-wizard -->
            <div id="bottom-wizard">
                <button type="button" name="backward" class="backward">Backward </button>
                <button type="button" name="forward" class="forward">Forward</button>
                <button type="submit" name="process" class="submit">Submit</button>
            </div>
            <!-- /bottom-wizard -->
        </form>
    </div>
    <!-- /Wizard container -->
</div>
<!-- /Form_container -->

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- COMMON SCRIPTS -->
<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/common_scripts.js')}}"></script>
<script src="{{asset('js/main_admission.js')}}"></script>
<script src="{{asset('assets/validate.js')}}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{asset('js/jquery-ui-1.8.22.min.js')}}"></script>
<script src="{{asset('js/jquery.wizard.js')}}"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>
<script src="{{asset('js/admission_func.js')}}"></script>

</body>
</html>
