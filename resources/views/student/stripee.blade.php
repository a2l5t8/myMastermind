<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>UDEMA | Modern Educational site template</title>

    <!-- Favicons-->
{{--    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">--}}
{{--    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">--}}
{{--    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">--}}
{{--    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">--}}
{{--    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">--}}

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('css/icon_fonts/css/all_icons.min.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

</head>

<body id="register_bg">

<nav id="menu" class="fake_menu"></nav>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->

<div id="login">
    <aside>
        <figure>
            <a href="index.html"><img src="{{asset('img/logo.png')}}" width="149" height="42" data-retina="true" alt=""></a>
        </figure>
        <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
        <form autocomplete="off" accept-charset="UTF-8" action="{{ route('stripePayment',['cid'=>$cid]) }}" class="require-validation"
              data-cc-on-file="false"
              data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
              id="payment-form" method="post">
            <div class="form-group">
                    @csrf
					<span class="input">
					<input class="input_field" type="text" size='4' type='text'>
						<label class="input_label">
						<span class="input__label-content">Name on Card</span>
					</label>
					</span>

                <span class="input">
					<input class="input_field card-number" type="text" autocomplete='off' size='20'>
						<label class="input_label">
						<span class="input__label-content">Card Number</span>
					</label>
					</span>

                <span class="input">
					<input class="input_field card-cvc" autocomplete='off' size='4' type='text'>
						<label class="input_label">
						<span class="input__label-content">CVC</span>
					</label>
					</span>

                <span class="input">
					<input class="input_field card-expiry-month" size='2'
                           type='text'>
						<label class="input_label">
						<span class="input__label-content">Expiration MM</span>
					</label>
					</span>

                <span class="input">
					<input class="input_field card-expiry-year"
                           size='4' type='text'>
						<label class="input_label">
						<span class="input__label-content">Expiration YYYY</span>
					</label>
					</span>

                <div id="pass-info" class="clearfix"></div>
            </div>
            <button type="submit" class="btn_1 rounded full-width add_top_30 submit-button">Pay</button>
            @if ((Session::has('success-message')))
                <div class="alert alert-success col-md-12">{{
					Session::get('success-message') }}</div>
            @endif @if ((Session::has('fail-message')))
                <div class="alert alert-danger col-md-12">{{
					Session::get('fail-message') }}</div>
            @endif
        </form>
        <div class="copy">© 2019 Udema</div>
    </aside>
</div>
<script src="https://code.jquery.com/jquery-1.12.3.min.js"
        integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
        crossorigin="anonymous"></script>
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
    crossorigin="anonymous"></script>
<!-- /login -->

<!-- COMMON SCRIPTS -->
<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/common_scripts.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('assets/validate.js')}}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{asset('js/pw_strenght.js')}}"></script>
<script>
    $(function() {
        $('form.require-validation').bind('submit', function(e) {
            var $form         = $(e.target).closest('form'),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'].join(', '),
                $inputs       = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid         = true;
            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault(); // cancel on first error
                }
            });
        });
    });
    $(function() {
        var $form = $("#payment-form");
        $form.on('submit', function(e) {
            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey('pk_test_SPX0lldm5Zjc5uMtVBSELV9o00iEfpLKhm');
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }
        });
        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    })
</script>
</body>
</html>
