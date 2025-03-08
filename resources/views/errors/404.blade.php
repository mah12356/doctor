<!doctype html>
<html dir="rtl" lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
{{--    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/owl-theme.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/jquery-simple-mobilemenu.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/aos.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/iconmoon.css')}}">
{{--    <link rel="stylesheet" href="{{asset('css/animate.css')}}">--}}
    <title>404</title>
    <style>
        .not{
            width: 100vw;
            height: 40vh;
            overflow: hidden;
        }
    </style>
</head>
<body>
@include('layout/header')
<div class="d-flex not flex-column justify-content-center align-items-center">
    <p class="h1">404</p>
    <p class="h1">صفحه پیدا نشد</p>
</div>
{{--<section class="site-section" id="contact-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12 mb-5 position-relative">--}}
{{--                <h2 class="section-title text-center mb-5">فرم تماس با ما</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row justify-content-between">--}}
{{--            <div class="col-lg-6">--}}
{{--                <form action="#" class="form">--}}
{{--                    <div class="row mb-4">--}}
{{--                        <div class="form-group col-6">--}}
{{--                            <input type="text" class="form-control" placeholder="نام">--}}
{{--                        </div>--}}
{{--                        <div class="form-group col-6">--}}
{{--                            <input type="text" class="form-control" placeholder="نام خانوادگی">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row mb-4">--}}
{{--                        <div class="form-group col-12">--}}
{{--                            <input type="email" class="form-control text-right" placeholder="ایمیل">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row mb-4">--}}
{{--                        <div class="form-group col-12">--}}
{{--                            <input type="text" class="form-control" placeholder="موضوع پیام">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row mb-4">--}}
{{--                        <div class="form-group col-12">--}}
{{--                            <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="پیام خود را در این قسمت وارد کنید..."></textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <input type="submit" class="btn btn-primary" value="ارسال پیام">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </form>--}}
{{--            </div>--}}
{{--            <div class="col-lg-5">--}}
{{--                <h3>شیراز</h3>--}}
{{--                <ul class="list-unstyled mb-5">--}}
{{--                    <li class="mb-3">--}}
{{--                        <strong class="d-block mb-1">آدرس</strong>--}}
{{--                        <span> فارس، شیراز، بلوار آزادگان، کارخانه نوآوری شیراز</span>--}}
{{--                    </li>--}}
{{--                    <li class="mb-3">--}}
{{--                        <strong class="d-block mb-1">شماره تماس 1</strong>--}}
{{--                        <span>07132309534</span>--}}
{{--                    </li>--}}
{{--                    <li class="mb-3">--}}
{{--                        <strong class="d-block mb-1">شماره تماس 2</strong>--}}
{{--                        <span>09032309534</span>--}}
{{--                    </li>--}}
{{--                    <li class="mb-3">--}}
{{--                        <strong class="d-block mb-1">ایمیل</strong>--}}
{{--                        <span>info@webrubik.com</span>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--                <h3>تهران</h3>--}}
{{--                <ul class="list-unstyled">--}}
{{--                    <li class="mb-3">--}}
{{--                        <strong class="d-block mb-1">آدرس</strong>--}}
{{--                        <span>تهران، خیابان قصرالدشت کوچه 12 سمت راست درب 4 پلاک 45</span>--}}
{{--                    </li>--}}
{{--                    <li class="mb-3">--}}
{{--                        <strong class="d-block mb-1">شماره تماس</strong>--}}
{{--                        <span>0216549876</span>--}}
{{--                    </li>--}}
{{--                    <li class="mb-3">--}}
{{--                        <strong class="d-block mb-1">ایمیل</strong>--}}
{{--                        <span>info@webrubik.com</span>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
@include('layout/footer')
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('js/jquery.sticky.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
