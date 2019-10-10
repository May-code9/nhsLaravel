<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="https://nmanationalhealthsummit.com/" />
    <meta property="og:image:secure_url" content="https://nmanationalhealthsummit.com/assets/img/nhs_logo.png" />

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/simple-line-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nivo-lightbox.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors/default.css') }}" media="screen"/>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/preloader.css') }}">
    <style media="screen">
        .floatLeft {
            float: left
        }
    </style>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token(),
  ]) !!};
    </script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TXF7CQ4');</script>
    <!-- End Google Tag Manager -->
@if(Route::currentRouteName() == 'nma.tickets')
    <!-- Global site tag (gtag.js) - Google Ads: 708211119 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-708211119"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'AW-708211119');
        </script>

        <!-- Event snippet for NMA National Summit Signup conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
        <script>
            let url = '/tickets';

            function gtag_report_conversion(url) {
                var callback = function () {
                    if (typeof (url) != 'undefined') {
                        window.location = url;
                    }
                };
                gtag('event', 'conversion', {
                    'send_to': 'AW-708211119/EHRrCLus_KsBEK_j2dEC',
                    'event_callback': callback
                });
                return false;
            }
        </script>
    @endif

</head>
<body class="width">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TXF7CQ4"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="preloader-wrapper">
    <div class="preloader">
        <img src="{{ asset('assets/img/nhs_logo.png') }}" width="90%" height="auto">
    </div>
</div>

@if(Route::currentRouteName() != 'nma.home')
    @include('partials.header2')
@endif

@yield('content')

@include('partials.footer')

<section id="copyright" style="background-color: #000">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="copyright-text text-center">
                    ©Designed and Developed by
                    <a href="#">
                        {{ config('app.designer') }}
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>


<a href="#" class="back-to-top">
    <i class="icon-arrow-up"></i>
</a>
<div class="bottom"><a href="#" class="settings"></a></div>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<script type="text/javascript">
    $(function () {
        var width = $('.width').width();
        var div = 1;
        if (width < 760) {
            $('.smallScreen').slideDown('4000');
            $('.headerForSmallScreen').show();
            $('.addWH').css({'width': 'auto', 'height': '40px'});
            $('.header2').css('paddingTop', '25px');
            $('.header1').css({'paddingBottom': '12px', 'paddingTop': '15px'});
            $('.headerForBigScreen').hide();
            $('#formMargin').css('margin', '0 0 300px');
            $('.about').css({'textAlign': 'center', 'marginBottom': '20px'});
        } else {

            $('.bigScreen').slideDown('4000');
            $('.headerForBigScreen').show();
            $('.headerForSmallScreen').remove();
            
        }
        if (width < 900) {
            div = 7;
        }
        else {
            div = 3;
        }
        var headerWidth = $('.headerLeft').width();
        var headerWidth = -((((width - headerWidth)/width) * 100)/div);
        $('.headerLeft').css('left', headerWidth+'%');
    });


</script>
@if(Route::currentRouteName() == 'nma.transaction')
    <script src="{{ asset('js/paystack.js') }}"></script>
@endif
<script src="{{ asset('js/share.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>

<script src="{{ asset('assets/js/smooth-scroll.js') }}"></script>

<script src="{{ asset('assets/js/wow.js') }}"></script>

<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>

<script src="{{ asset('assets/js/nivo-lightbox.js') }}"></script>

<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/js/jquery.mapit.min.js') }}"></script>
<script src="{{ asset('assets/js/initializers.js') }}"></script>
<script src="{{ asset('js/preloader.js') }}"></script>

</body>
</html>
