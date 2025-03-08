<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>رزرو وقت دکتر سام</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('css/jquery-simple-mobilemenu.css')}}">--}}
    {{--    <link rel="stylesheet" href="{{asset('css/aos.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/iconmoon.css')}}">
</head>
<body>
<div id="contact" class="contact_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                 data-wow-offset="0">
                <div class="contact">
                    <form class="form" method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">نام</label><input type="time" name="name" class="form-control"
                                                                required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">ایمیل شما</label><input type="email" name="email" class="form-control"
                                                                      required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">موضوع تو</label><input type="tel" name="subject" class="form-control"
                                                                     required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">پیغام تو</label><textarea rows="6" name="message" class="form-control"
                                                                        required="required"></textarea>
                            </div>
                            <div class="col-md-12 text-center"><button type="submit" value="Send message"
                                                                       name="submit" id="submitButton" class="btn_one"
                                                                       title="Submit Your Message!">پیام فرستادن</button></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                 data-wow-offset="0">
                <div class="map"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.957183635167!2d-74.00402768559431!3d40.71895904512855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598a1316e7a7%3A0x47bb20eb6074b3f0!2sNew%20Work%20City%20-%20(CLOSED)!5e0!3m2!1sbn!2sbd!4v1600305497356!5m2!1sbn!2sbd"
                        style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
            </div>
        </div>
    </div>
</div>
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
