<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Aviato | E-commerce template</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Constra HTML Template v1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('Assets/plugins/themefisher-font/style.css') }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animate/animate.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick-theme.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body id="body">

    <section class="forget-password-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="block text-center">
                        <a class="logo" href="index.html">
                            <img src="{{ asset('Assets/images/logo.png') }}" alt="">
                        </a>
                        <h2 class="text-center">Welcome Back</h2>
                        <form class="text-left clearfix">
                            <p>Please enter the email address for your account. A verification code will be sent to you.
                                Once you have received the verification code, you will be able to choose a new password
                                for your account.</p>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Account email address">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-main text-center">Request password reset</button>
                            </div>
                        </form>
                        <p class="mt-20"><a href="login.html">Back to log in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="{{ asset('assets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap Touchpin -->
    <script src="{{ asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
    <!-- Instagram Feed Js -->
    <script src="{{ asset('assets/plugins/instafeed/instafeed.min.js') }}"></script>
    <!-- Video Lightbox Plugin -->
    <script src="{{ asset('assets/plugins/ekko-lightbox/dist/ekko-lightbox.min.js') }}"></script>
    <!-- Count Down Js -->
    <script src="{{ asset('assets/plugins/syo-timer/build/jquery.syotimer.min.js') }}"></script>

    <!-- slick Carousel -->
    <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slick/slick-animation.min.js') }}"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/google-map/gmap.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
