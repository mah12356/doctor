<!doctype html>
<html lang="" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ثبت نام</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('css/jquery-simple-mobilemenu.css')}}">--}}
    {{--    <link rel="stylesheet" href="{{asset('css/aos.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/iconmoon.css')}}">
</head>
<body>
@include('layout/header')
<section class="site-section mt-5" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 position-relative">
                <h2 class="section-title text-center mb-5">فرم تماس با ما</h2>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-12">
                <form method="post" class="form">
                    @csrf
                    <div class="row mb-4">
                        <div class="form-group col-6">
                            <input type="text" class="form-control" placeholder="شماره همراه">
                        </div>
                        <div class="form-group col-6">
                            <input type="text" class="form-control" placeholder="نام خانوادگی">
                        </div>
                    </div>
                    <p>آیا حساب کاربری دارید ؟<a href="/login">کلیک کنید</a></p>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary" value="ثبت نام">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
@include('layout/footer')
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
{{--    <script src="{{asset('js/jquery-ui.js')}}"></script>--}}
{{--    <script src="{{asset('js/popper.min.js')}}"></script>--}}
{{--    <script src="{{asset('js/bootstrap.min.js')}}"></script>--}}
{{--    <script src="{{asset('js/owl.carousel.min.js')}}"></script>--}}
{{--    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>--}}
<script src="{{asset('js/aos.js')}}"></script>
{{--    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>--}}
{{--    <script src="{{asset('js/jquery.sticky.js')}}"></script>--}}
{{--    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>--}}
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
