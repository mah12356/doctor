<!doctype html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>درباره ما</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
{{--    <link rel="stylesheet" href="{{asset('css/jquery-simple-mobilemenu.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/aos.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/iconmoon.css')}}">
</head>
<body>
@include('layout/header')
    <div class="site-section mt-5" id="about-section">
        <div class="container">
            <div class="row ">
                <div class="col-12 mb-4 position-relative">
                    <h2 class="section-title text-dir">درباره ما</h2>
                </div>
                <div class="col-lg-4">
                    <p>در یک تعریف ساده، بازاریابی دیجیتال تبلیغ محصولات و خدمات با استفاده از دستگاه‌های الکترونیکی یا اینترنت است. این برنامه شامل پیام رسانی متنی،ویدئو، اپلیکیشن، پادکست‌ها، بیلبوردهای الکترونیکی، تلویزیون دیجیتال و کانال های رادیویی و غیره است.  بازاریابی دیجیتال به یک سازمان امکان می‌دهد کمپین ها، محتوا و استراتژی خود را تجزیه و تحلیل کند تا بفهمد چه کاری انجام می‌دهد.</p>
                </div>
                <div class="col-lg-4">
                    <img src="images/about.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-4">
                    <p>اگر شما صاحب کالا یا خدمات هستید و می‌خواهید ارتباط مؤثرتر و موفق‌تری با مخاطبین برند خود داشته باشید بی‌شک حضور شما در رسانه‌های دیجیتال ضروری است. دیجیتال مارکتینگ دیگر ترندی در حوزه بازاریابی نیست بلکه برعکس یک ابزار است برای موفقیت در حوزه بازاریابی و البته تبلیغات، چرا که برخلاف دیگر ترندهای بازاریابی، شما هر فعالیت خود را می‌توانید اندازه‌گیری کنید.</p>
                </div>
            </div>
        </div>
    </div>
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
