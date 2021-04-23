<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js">
<!--<![endif]-->

<!-- Mirrored from boom-theme.myshopify.com/account/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 23:41:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>

    <!-- Basic page needs ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <link rel="shortcut icon"
        href="assets/cdn.shopify.com/s/files/1/0437/0454/9536/t/26/assets/favicon6869.png?v=4599385683376967758"
        type="image/png" />

    <!-- Title and description ================================================== -->
    <title>
        Account &ndash; Boom Theme
    </title>

    <!-- Social meta ================================================== -->


    <meta property="og:type" content="website">
    <meta property="og:title" content="Account">
    <meta property="og:url" content="login.html">

    <meta property="og:image"
        content="assets/cdn.shopify.com/s/files/1/0437/0454/9536/t/26/assets/logod40c.png?v=8319783983011445918">
    <meta property="og:image:secure_url"
        content="assets/cdn.shopify.com/s/files/1/0437/0454/9536/t/26/assets/logod40c.png?v=8319783983011445918">



    <meta property="og:site_name" content="Boom Theme">



    <meta name="twitter:card" content="summary">





    <!-- Helpers ================================================== -->
    <link rel="canonical" href="login.html">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#373737">
    <!-- CSS ================================================== -->
    <link href="assets/cdn.shopify.com/s/files/1/0437/0454/9536/t/26/assets/frame.scss3fa6.css?v=4263887276170191886"
        rel="stylesheet" type="text/css" media="all" />
    <link href="assets/cdn.shopify.com/s/files/1/0437/0454/9536/t/26/assets/style4edd.css?v=10936923291504767764"
        rel="stylesheet" type="text/css" media="all" />
    <link href="http://cdn.shopify.com/s/files/1/0437/0454/9536/t/26/assets/slick.scss?v=10122632354879939270"
        rel="stylesheet" type="text/css" media="all" />
    <link href="assets/cdn.shopify.com/s/files/1/0437/0454/9536/t/26/assets/prettyPhotode1c.css?v=12757784511525754184"
        rel="stylesheet" type="text/css" media="all" />
    <link href="assets/cdn.shopify.com/s/files/1/0437/0454/9536/t/26/assets/animatea14e.css?v=17046942425478865338"
        rel="stylesheet" type="text/css" media="all" />
    <link href="assets/cdn.shopify.com/s/files/1/0437/0454/9536/t/26/assets/font-all.minc83d.css?v=14597452402338798491"
        rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" type="text/css"
        href="http://fonts.googleapis.com/css?family=Poppins:300,300italic,400,500,600,400italic,600italic,700,700italic,800,800italic">


    <link rel="stylesheet" type="text/css"
        href="http://fonts.googleapis.com/css?family=Playfair+Display:300,300italic,400,500,600,400italic,600italic,700,700italic,800,800italic">


    <link rel="stylesheet" type="text/css"
        href="http://fonts.googleapis.com/css?family=Poppins:300,300italic,400,500,600,400italic,600italic,700,700italic,800,800italic">


    <link rel="stylesheet" type="text/css"
        href="http://fonts.googleapis.com/css?family=Playfair+Display:300,300italic,400,500,600,400italic,600italic,700,700italic,800,800italic">

   {{ View::make('layouts.script')}}

</head>

<body id="boom-theme" class="template-index  others ">
    <div id="shopify-section-top-countdown-bar" class="shopify-section index-section">


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.header-top').each(function() {
                    $(this).css({
                        'height': $(this).outerHeight() + 'px'
                    });
                });
            });

        </script>
    </div>

    <div class="shifter-page is-moved-by-drawer" id="PageContainer">



        <div id="PageContainer"></div>


        <div class="quick-view"></div>
        <div class="wrapper-header wrapper-container">
    
            <div class="header-type-8 ">

        {{ View::make('header') }}

        @yield('home')
        @yield('login')
        @yield('register')
        @yield('cart')
        @yield('collections')

        </div>
        </div>
        {{ View::make('footer') }}
    </div>

</body>
</html>