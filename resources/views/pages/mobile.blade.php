<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>NHS | Transaction</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/fonts/css/gfont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/styles/framework.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/fonts/css/fontawesome-all.min.css') }}">
</head>

<body class="theme-light" data-highlight="blue2">
<div id="page-preloader">
    <div class="loader-main">
        <div class="preload-spinner border-highlight"></div>
    </div>
</div>

<div id="page">
    <div class="header header-fixed header-logo-app header-transparent">
        <a href="index.html" class="header-title color-white">Make Payment</a>
    </div>
    <div class="page-content-black"></div>
    <div class="page-content">
        <div class="cover-wrapper cover-no-buttons">
            <div data-height="cover" class="caption bottom-0">
                <div class="caption-center">
                    <div class="left-50 right-50" id="userForm">
                        <h1 class="color-white center-text uppercase ultrabold fa-3x">Make Payment </h1>
                        <p class="color-highlight center-text font-12 under-heading bottom-30 top-5">
                            Let's get you fully registered
                        </p>
                        <div class="input-style input-light has-icon input-style-1 input-required">
                            <i class="input-icon fa fa-user font-11"></i>
                            <span>Amount</span>

                            <input type="tel" id="amount" value="<?php echo($price/1000) ?>,000" disabled>
                            <input type="hidden" id="email" value="{{ $user->email }}">
                            <input type="hidden" id="first_name" value="{{ $user->first_name }}">
                            <input type="hidden" id="last_name" value="{{ $user->last_name }}">
                            <input type="hidden" id="phone" value="{{ $user->phone }}">
                        </div>

                        <div class="clear"></div>
                        <a id="pay" href="#" onclick="payWithPaystack(price)" class="button button-full button-m shadow-large button-round-small bg-highlight top-30 bottom-0">Make Payment</a>
                        <script src="https://js.paystack.co/v1/inline.js"></script>
                    </div>
                </div>
            </div>
            <div class="caption-overlay bg-black opacity-90"></div>
            <div class="caption-bg" style="background-image:url({{ asset('mobile/images/icc.jpg') }})"></div>
        </div>
    </div>

    <div id="menu-warning" class="menu menu-box-bottom" data-menu-height="315" data-menu-effect="menu-over">

    </div>
    <div class="menu-hider"></div>
</div>

<script type="text/javascript" src="{{ asset('mobile/scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('mobile/scripts/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('mobile/scripts/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('mobile/scripts/macode09.js') }}"></script>
<script src="{{ asset('js/paystack.js') }}"></script>

</body>

</html>
