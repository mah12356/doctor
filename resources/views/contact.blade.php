<!doctype html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ارتباط با ما</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-simple-mobilemenu.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
@include('layout/header')
<section class="section-top">
    <div class="container">
        <div class="col-lg-10 offset-lg-1 text-center">
            <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
                 data-wow-offset="0">
                <h1>در تماس باشید</h1>
            </div>
        </div>
    </div>
</section>
<section class="address_area section-padding">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s"
                 data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_address sa_one">
                    <i class="ti-map"></i>
                    <h4>مکان ما</h4>
                    <address>میدان انقلاب خ منیری جاوید خ وحید نظری پلاک 150 واحد 2</address>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s"
                 data-wow-delay="0.2s" data-wow-offset="0">
                <div class="single_address sa_two">
                    <i class="ti-mobile"></i>
                    <h4>تلفن</h4>
                    <a href="telto:+989109006347">09109006347</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s"
                 data-wow-delay="0.3s" data-wow-offset="0">
                <div class="single_address sa_three">
                    <i class="ti-email"></i>
                    <h4>ایمیل بفرست</h4>
                    <a href="mailto:mahdijannat021@gmail.com">mahdijannat021@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="contact" class="contact_area section-padding">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="map"><iframe src="https://maps.google.com/maps?q=35.699166, 51.392124&z=15&output=embed" width="360" height="270" frameborder="0" style="border:0"></iframe></div>
            </div>
        </div>
    </div>
</div>
@include('layout/footer')
<script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/modernizr-2.8.3.min.js')}}"></script>
<script src="{{asset('js/jquery-simple-mobilemenu.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('js/scrolltopcontrol.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
