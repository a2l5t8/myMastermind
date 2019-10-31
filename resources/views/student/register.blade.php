<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="iANikzad">
    <title>UDEMA | Students Entry</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
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
        <form name="example-1"  method="POST" action="{{route('student.register')}}">
            @csrf
            <input id="website" name="website" type="text" value="">
            <!-- Leave for security protection, read docs for details -->
            <div id="middle-wizard">
                <div class="step">
                    <div id="intro">
                        <figure><img src="{{asset('img/wizard_intro_icon.svg')}}" alt=""></figure>
                        <h1>Students Entry</h1>
                        <p>Exerci tibique eum cu, paulo appellantur et mei, ea partem urbanitas vim. His ei iusto nonumes atomorum. Mentitum pericula in nec. In eos habemus tibique. </p>
                        <p><strong>Mel erant legere iuvaret ea. At eum doctus voluptatibus, has id veritus constituam.</strong></p>
                    </div>
                </div>

                <div class="step">
                    <h3 class="main_question"><strong>1/3</strong>Please fill with your details</h3>
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
                    <div class="form-group radio_input">
                        <label><input type="radio" value="Male" checked name="gender" class="icheck">Male</label>
                        <label><input type="radio" value="Female" name="gender" class="icheck">Female</label>
                    </div>
                </div>
                <!-- /step-->

                <div class="step">
                    <h3 class="main_question"><strong>2/3</strong>Please fill your personal info</h3>
                    <div class="form-group">
                        <input type="text" id="search" onkeydown="removeForward()"  name="courseid" class="form-control required" placeholder="Enter Your Course ID">
                        <input type="hidden" id="show" value="0">
                        <span>if you do not have any course id please contact your teacher and get the course id and then try again</span>
                        <br>
                        <button type="button"  onclick="courseID_finder()" class="btn btn-rounded btn-primary">Search</button>
                    </div>
                    <div id="fail" style="display: none">
                        <h3 class="alert-danger">No course was found</h3>
                    </div>

                    <div class="form-group" id="success1" style="display: none;border-radius: 25px;border:2px solid #3f9fff">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Course name</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Course teacher</h6>
                                <p class="card-text">Course Limit Description</p>
                                price : <a class="card-link"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /step-->

                <div class="submit step">
                    <h3 class="main_question"><strong>3/3</strong>Enter Your Card Detail</h3>
                    <div class="form-group">
                        <input type="email" name="validEmail" class="form-control required" placeholder="Your Valid Email" value="{{old('validEmail')}}">
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
                <button type="button" name="backward" onclick="showAgain()" class="backward">Backward </button>
                <button type="button" name="forward" onclick="checkCourse()" class="forward">Forward</button>
                <button type="submit" name="process"  class="submit">Pay</button>
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
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    function courseID_finder()
    {
        const courseid = document.getElementById('search').value;
        axios.get('/courseid',{
            params: {
                courseid: courseid,
            }
        }).then((response)=>{
            const forward = document.getElementsByClassName('forward')[0];
            if (response.data.id === undefined)
            {
                document.getElementById("success1").style.display = "none";
                document.getElementById("fail").style.display = "block";

                forward.style.display = "none !important";
            }else {
                document.getElementById("success1").style.display = "block";
                document.getElementById("fail").style.display = "none";

                // setting the state to True
                document.getElementById('show').value = 1;
                forward.style.display = "inline-block !important";

                document.getElementsByClassName('card-title')[0].innerHTML = response.data.course.name;
                document.getElementsByClassName('card-subtitle')[0].innerHTML = response.data.teacher.first_name + " " + response.data.teacher.last_name;
                document.getElementsByClassName('card-text')[0].innerHTML = courseLimit(response.data.course.description);
                document.getElementsByClassName('card-link')[0].innerHTML = response.data.course.price + "$";
            }
        })
    }

    function removeForward()
    {
        var forward = document.getElementsByClassName('forward')[0];
        var state = document.getElementById('show').value;

        if (state !== "1")
        {
            forward.style.display = "none";
        }else {
            forward.style.display = "inline-block";
        }
    }

    function courseLimit(data)
    {
        return data.slice(0,70)+"...";
    }

    function showAgain()
    {
        var forward = document.getElementsByClassName('forward')[0];
        forward.style.display = "inline-block";
    }

    function checkCourse()
    {
        var forward = document.getElementsByClassName('forward')[0];
        var state = document.getElementById('show').value;

        let steps = document.querySelectorAll(".step");
        if (steps[1].style.display !== 'none')
        {
            if (state !== "1")
            {
                forward.style.display = "none";
            }
        }
        if(steps[2].style.display !== 'none')
        {
            forward.style.display = "none";
        }
    }
</script>
</body>
</html>

