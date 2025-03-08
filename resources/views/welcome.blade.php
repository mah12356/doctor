<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>صفحه اصلی</title>
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('owlcarousel/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery-simple-mobilemenu.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
{{--        <link rel="stylesheet" href="{{asset('css/kamadatepicker.min.css')}}">--}}
    </head>
    <body>
    <body data-spy="scroll" data-offset="80">
    @include('layout/header')
    <section class="home_bg hb_height"
             style="background-image: url({{asset('images/bg/home-bg.jpg')}}); background-size:cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="hero-text ht_top">
                        <h1>
                            <span>مطالعه هوشمند</span>جایی که دانش با وب ملاقات می کند
                        </h1>
                        <p>لورم ایوم متن ساختگی با تولید آسان نامفهوم از صنعت چاپ با استفاده از طراحان گرافیک است.
                            چاپگرها و</p>
                    </div>
                    <div class="home_sb">
                        <form action="#" class="banner_subs">
                            <input type="text" class="form-control home_si" placeholder="دوره خود را اینجا جستجو کنید"
                                   required="required"><button type="button" class="subscribe__btn">جستجو کردن<i
                                    class="fa fa-paper-plane-o"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="hero-text-img">
                        <img src="images/home-img2.png" class="img-fluid" alt="">
                        <div class="home_ps">
                            <span class="ti-user"></span>
                            <h2>4500+</h2>
                            <p>دانش آموز فعال</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="count_area counter_feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-counter">
                        <span class="ti-folder sc_one"></span>
                        <h2 class="counter-num">134</h2>
                        <p>دوره آنلاین ما</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-counter">
                        <span class="ti-medall-alt sc_two"></span>
                        <h2 class="counter-num">299</h2>
                        <p>برنامه ها</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-counter">
                        <span class="ti-id-badge sc_three"></span>
                        <h2 class="counter-num">684</h2>
                        <p>دانشجویان ماهر</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-counter">
                        <span class="ti-user sc_four"></span>
                        <h2 class="counter-num">941</h2>
                        <p>ثبت نام کرده ها</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top_cat__area section-padding"
             style="background-image: url({{{asset('images/bg/shape-1.png')}}}); background-size:cover; background-position: center center;">
        <div class="container">
            <div class="section-title text-center">
                <h2>سفر خود را با ما آغاز کنید</h2>
                <p>ما یک رویکرد کاملاً جدید برای اساسی ترین پارادایم های یادگیری ارائه می دهیم. از میان طیف گسترده ای از
                    گزینه های یادگیری انتخاب کنید و مهارت های جدیدی به دست آورید! مدرسه ما معلوم است</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                     data-wow-offset="0">
                    <div class="single_tp">
                        <span class="sc_one">01</span>
                        <h3>کارشناس<br>معلم</h3>
                        <p>لورم ایوم متن ساختگی با تولید راحت نامفهوم از صنعت چاپ با استفاده از</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                     data-wow-offset="0">
                    <div class="single_tp">
                        <span class="sc_two">02</span>
                        <h3>کیفیت<br>تحصیلات</h3>
                        <p>لورم ایوم متن ساختگی با تولید راحت نامفهوم از صنعت چاپ با استفاده از</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                     data-wow-offset="0">
                    <div class="single_tp">
                        <span class="sc_three">03</span>
                        <h3>از راه دور<br>یادگیری</h3>
                        <p>لورم ایوم متن ساختگی با تولید راحت نامفهوم از صنعت چاپ با استفاده از</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                     data-wow-offset="0">
                    <div class="single_tp">
                        <span class="sc_four">04</span>
                        <h3>طول عمر<br>حمایت کردن</h3>
                        <p>لورم ایوم متن ساختگی با تولید راحت نامفهوم از صنعت چاپ با استفاده از</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ab_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                     data-wow-offset="0">
                    <div class="ab_img"><img src="images/about1.png" class="img-fluid" alt="image"></div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                     data-wow-offset="0">
                    <div class="ab_content">
                        <h2>ما دوره آنلاین را در جهان جهانی ارائه می دهیم</h2>
                        <p>ما یک رویکرد کاملاً جدید برای اساسی ترین پارادایم های یادگیری ارائه می دهیم. از میان طیف
                            گسترده ای از گزینه های یادگیری انتخاب کنید و مهارت های جدیدی به دست آورید! مدرسه ما معلوم
                            است</p>
                        <p>ما یک رویکرد کاملاً جدید برای اساسی ترین پارادایم های یادگیری ارائه می دهیم. از میان طیف
                            گسترده ای از گزینه های یادگیری انتخاب کنید و مهارت های جدیدی به دست آورید! مدرسه ما معلوم
                            است</p>
                        <ul>
                            <li>
                                <span class="ti-check"></span>دسترسی پیدا کنید<b>12000+</b>از دوره های برتر ما
                            </li>
                            <li>
                                <span class="ti-check"></span>موضوع پرطرفدار برای یادگیری اکنون در دوره های آنلاین ما
                                برای دانش آموزان
                            </li>
                            <li>
                                <span class="ti-check"></span>مربی مناسب خود را پیدا کنید
                            </li>
                        </ul>
                        <a class="btn_one" href="course.html">مشاهده همه دوره ها<i class="ti-arrow-top-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top_cat__area section-padding"
             style="background-image: url({{asset('images/bg/section-2.jpg')}}); background-size:cover; background-position: center center;">
        <div class="container">
            <div class="section-title text-center">
                <h2>بر اساس دسته بندی های محبوب پیدا کنید</h2>
                <p>ما یک رویکرد کاملاً جدید برای اساسی ترین پارادایم های یادگیری ارائه می دهیم. از میان طیف گسترده ای از
                    گزینه های یادگیری انتخاب کنید و مهارت های جدیدی به دست آورید! مدرسه ما معلوم است</p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                     data-wow-offset="0">
                    <div class="cat_list">
                        <ul>
                            <li><a href="#"><img src="images/e1.png" alt="category-image">بازاریابی دیجیتال</a></li>
                            <li><a href="#"><img src="images/e2.png" alt="category-image">طراحی UI/UX</a></li>
                            <li><a href="#"><img src="images/e3.png" alt="category-image">طراحی بصری سه بعدی</a>
                            </li>
                            <li><a href="#"><img src="images/e4.png" alt="category-image">بازاریابی محتوا</a></li>
                            <li><a href="#"><img src="images/e5.png" alt="category-image">عکاسی</a></li>
                            <li><a href="#"><img src="images/e6.png" alt="category-image">عکس سبک زندگی</a></li>
                            <li><a href="#"><img src="images/e7.png" alt="category-image">طراحی هنری</a></li>
                            <li><a href="#"><img src="images/e8.png" alt="category-image">امور مالی و بانکی</a></li>
                            <li><a href="#"><img src="images/e9.png" alt="category-image">طراحی گرافیک</a></li>
                            <li><a href="#"><img src="images/e2.png" alt="category-image">طراحی داخلی</a></li>
                            <li><a href="#"><img src="images/e3.png" alt="category-image">طراحی بصری سه بعدی</a>
                            </li>
                            <li><a href="#"><img src="images/e7.png" alt="category-image">طراحی هنری</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home_course section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-6 col-xs-12">
                    <div class="section-title">
                        <h2>با بیش از<b>80000+</b><br>سازندگان دوره ها و یادگیری</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="cour_btn"><a href="course.html" class="btn_one">مشاهده تمام دوره ها<i
                                class="ti-arrow-top-left"></i></a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_course">
                        <div class="single_c_img">
                            <img src="images/course/1.png" class="img-fluid" alt="course-image"><span>تحصیلات</span>
                        </div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star"></i>
                        <h4><a href="course.html">اصول اولیه کاربر را کامل از مبتدی تا پیشرفته</a></h4>
                        <p><span class="ti-book"></span>12 دوره</p>
                        <p><span class="ti-alarm-clock"></span>2 ساعت و 32 دقیقه</p>
                        <div class="price">هزینه دوره - 99 تومان</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_course">
                        <div class="single_c_img">
                            <img src="images/course/2.png" class="img-fluid" alt="course-image"><span>UI/UX</span>
                        </div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star"></i>
                        <h4><a href="course.html">دوره توسعه اندروید 12 و کاتلین پیشرفته</a></h4>
                        <p><span class="ti-book"></span>41 دوره</p>
                        <p><span class="ti-alarm-clock"></span>3 ساعت و 32 دقیقه</p>
                        <div class="price">هزینه دوره - 49 تومان</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_course">
                        <div class="single_c_img">
                            <img src="images/course/3.png" class="img-fluid" alt="course-image"><span>سبک
                                زندگی</span>
                        </div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star"></i>
                        <h4><a href="course.html">دوره آموزشی HTML، CSS و Javascript را کامل کنید</a></h4>
                        <p><span class="ti-book"></span>32 دوره</p>
                        <p><span class="ti-alarm-clock"></span>2 ساعت و 32 دقیقه</p>
                        <div class="price">هزینه دوره - رایگان</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_course">
                        <div class="single_c_img">
                            <img src="images/course/4.png" class="img-fluid" alt="course-image"><span>علوم
                                پایه</span>
                        </div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star"></i>
                        <h4><a href="course.html">IOS و Swift توسعه اپلیکیشن iOS را کامل کردند</a></h4>
                        <p><span class="ti-book"></span>19 دوره</p>
                        <p><span class="ti-alarm-clock"></span>2 ساعت و 32 دقیقه</p>
                        <div class="price">هزینه دوره - 59 تومان</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_course">
                        <div class="single_c_img">
                            <img src="images/course/5.png" class="img-fluid" alt="course-image"><span>نوین</span>
                        </div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star"></i>
                        <h4><a href="course.html">طراحی گرافیک را با بهترین مربی IT بیاموزید</a></h4>
                        <p><span class="ti-book"></span>22 دوره</p>
                        <p><span class="ti-alarm-clock"></span>2 ساعت و 32 دقیقه</p>
                        <div class="price">هزینه دوره - 79 تومان</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_course">
                        <div class="single_c_img">
                            <img src="images/course/6.png" class="img-fluid" alt="course-image"><span>بازار
                                یابی</span>
                        </div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star"></i>
                        <h4><a href="course.html">علم داده را برای کسب و کار بعدی خود کامل کنید</a></h4>
                        <p><span class="ti-book"></span>11 دوره</p>
                        <p><span class="ti-alarm-clock"></span>2 ساعت و 32 دقیقه</p>
                        <div class="price">هزینه دوره - 39 تومان</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="partner-logo section-padding">
        <div class="container">
            <div class="row part_bg">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="partner_title">
                        <h3>کمک<span>86000+</span>شرکت‌های جهانی دستکش‌ها را برمی‌دارند</h3>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-8 col-xs-12 text-center">
                    <div class="partner">
                        <a href="#"><img src="images/clients/1.png" alt="image"></a><a href="#"><img
                                src="images/clients/2.png" alt="image"></a><a href="#"><img
                                src="images/clients/3.png" alt="image"></a><a href="#"><img
                                src="images/clients/4.png" alt="image"></a><a href="#"><img
                                src="images/clients/5.png" alt="image"></a><a href="#"><img
                                src="images/clients/2.png" alt="image"></a><a href="#"><img
                                src="images/clients/1.png" alt="image"></a><a href="#"><img
                                src="images/clients/3.png" alt="image"></a><a href="#"><img
                                src="images/clients/4.png" alt="image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="team_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>با مربیان ما آشنا شوید</h2>
                <p>ما یک رویکرد کاملاً جدید برای اساسی ترین پارادایم های یادگیری ارائه می دهیم. از میان طیف گسترده ای از
                    گزینه های یادگیری انتخاب کنید و مهارت های جدیدی به دست آورید! مدرسه ما معلوم است</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                     data-wow-offset="0">
                    <div class="our-team">
                        <div class="team-content">
                            <a href="#"><img src="images/team/team1.jpg" alt=""></a>
                            <ul class="social-links">
                                <li><a href="#" class="ti-twitter"></a></li>
                                <li><a href="#" class="ti-linkedin"></a></li>
                                <li><a href="#" class="ti-facebook"></a></li>
                            </ul>
                        </div>
                        <div class="team-prof">
                            <h3>بیلکیس وابی</h3>
                            <span>طراح وب</span>
                        </div>
                        <div class="sth_det2">
                            <span class="ti-file"><u>04 دوره</u></span><span class="ti-user"><u>27 دانشجو</u></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                     data-wow-offset="0">
                    <div class="our-team">
                        <div class="team-content">
                            <a href="#"><img src="images/team/team2.jpg" alt=""></a>
                            <ul class="social-links">
                                <li><a href="#" class="ti-twitter"></a></li>
                                <li><a href="#" class="ti-linkedin"></a></li>
                                <li><a href="#" class="ti-facebook"></a></li>
                            </ul>
                        </div>
                        <div class="team-prof">
                            <h3>خلق وسیم</h3>
                            <span>شرکت انواتو</span>
                        </div>
                        <div class="sth_det2">
                            <span class="ti-file"><u>06 دوره</u></span><span class="ti-user"><u>41 دانش آموز</u></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                     data-wow-offset="0">
                    <div class="our-team">
                        <div class="team-content">
                            <a href="#"><img src="images/team/team3.jpg" alt=""></a>
                            <ul class="social-links">
                                <li><a href="#" class="ti-twitter"></a></li>
                                <li><a href="#" class="ti-linkedin"></a></li>
                                <li><a href="#" class="ti-facebook"></a></li>
                            </ul>
                        </div>
                        <div class="team-prof">
                            <h3>شیین تیم</h3>
                            <span>Codecanyou</span>
                        </div>
                        <div class="sth_det2">
                            <span class="ti-file"><u>13 دوره</u></span><span class="ti-user"><u>31 دانش آموز</u></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                     data-wow-offset="0">
                    <div class="our-team">
                        <div class="team-content">
                            <a href="#"><img src="images/team/team4.jpg" alt=""></a>
                            <ul class="social-links">
                                <li><a href="#" class="ti-twitter"></a></li>
                                <li><a href="#" class="ti-linkedin"></a></li>
                                <li><a href="#" class="ti-facebook"></a></li>
                            </ul>
                        </div>
                        <div class="team-prof">
                            <h3>شريف شريفه</h3>
                            <span>چوتور Tsc</span>
                        </div>
                        <div class="sth_det2">
                            <span class="ti-file"><u>07 دوره</u></span><span class="ti-user"><u>24 دانشجو</u></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ab_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                     data-wow-offset="0">
                    <div class="ab_content">
                        <h2>چرا ما را برای دوره های آموزشی آنلاین خود انتخاب کنید؟</h2>
                        <p>ما یک رویکرد کاملاً جدید برای اساسی ترین پارادایم های یادگیری ارائه می دهیم. از میان طیف
                            گسترده ای از گزینه های یادگیری انتخاب کنید و مهارت های جدیدی به دست آورید! مدرسه ما معلوم
                            است</p>
                        <p>ما یک رویکرد کاملاً جدید برای اساسی ترین پارادایم های یادگیری ارائه می دهیم. از میان طیف
                            گسترده ای از گزینه های یادگیری انتخاب کنید و مهارت های جدیدی به دست آورید! مدرسه ما معلوم
                            است</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                     data-wow-offset="0">
                    <div class="ab_img">
                        <img src="images/about3.png" class="img-fluid" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testi_area section-padding">
        <div class="container">
            <div class="section-title">
                <h2>آنچه دانش آموزان می گویند برای انجام<br>دوره آنلاین آنها</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="ab_img"><img src="images/review.png" class="img-fluid" alt="image"></div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <img src="images/quote.png" alt="">
                            <div class="testimonial_content">
                                <i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i
                                    class="ti-star"></i><i class="ti-star"></i>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و
                                    متخصصان را می طلبد</p>
                            </div>
                            <div class="testi_pic_title">
                                <img src="images/testimonial/1.png" alt="">
                                <h4>عجمین عادل</h4>
                                <p>شرکت گروتن</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <img src="images/quote.png" alt="">
                            <div class="testimonial_content">
                                <i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i
                                    class="ti-star"></i><i class="ti-star"></i>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و
                                    متخصصان را می طلبد</p>
                            </div>
                            <div class="testi_pic_title">
                                <img src="images/testimonial/2.png" alt="">
                                <h4>شاروخ خان</h4>
                                <p>Red Chili Inc</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <img src="images/quote.png" alt="">
                            <div class="testimonial_content">
                                <i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i
                                    class="ti-star"></i><i class="ti-star"></i>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و
                                    متخصصان را می طلبد</p>
                            </div>
                            <div class="testi_pic_title">
                                <img src="images/testimonial/3.png" alt="">
                                <h4>آنوشکا شارما</h4>
                                <p>شرکت نایکا</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <img src="images/quote.png" alt="">
                            <div class="testimonial_content">
                                <i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i
                                    class="ti-star"></i><i class="ti-star"></i>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و
                                    متخصصان را می طلبد</p>
                            </div>
                            <div class="testi_pic_title">
                                <img src="images/testimonial/4.png" alt="">
                                <h4>عجمین عادل</h4>
                                <p>شرکت گروتن</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <img src="images/quote.png" alt="">
                            <div class="testimonial_content">
                                <i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i
                                    class="ti-star"></i><i class="ti-star"></i>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و
                                    متخصصان را می طلبد</p>
                            </div>
                            <div class="testi_pic_title">
                                <img src="images/testimonial/5.png" alt="">
                                <h4>عجمین عادل</h4>
                                <p>شرکت گروتن</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog" class="blog_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>آخرین وبلاگ و اخبار</h2>
                <p>ما یک رویکرد کاملاً جدید برای اساسی ترین پارادایم های یادگیری ارائه می دهیم. از میان طیف گسترده ای از
                    گزینه های یادگیری انتخاب کنید و مهارت های جدیدی به دست آورید! مدرسه ما معلوم است</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                     data-wow-offset="0">
                    <div class="single_blog">
                        <img src="images/blog/1.jpg" class="img-fluid" alt="image">
                        <div class="content_box">
                            <span>10 مه 2024 |<a href="blog.html">تحصیلات</a></span>
                            <h2><a href="blog.html">نقاشی و مجسمه سازی حرفه ای موبایل</a></h2>
                            <a class="btn_one" href="blog.html">ادامه مطلب<i class="ti-arrow-top-left"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                     data-wow-offset="0">
                    <div class="single_blog">
                        <img src="images/blog/2.jpg" class="img-fluid" alt="image">
                        <div class="content_box">
                            <span>16 مه 2024 |<a href="blog.html">تحصیلات</a></span>
                            <h2><a href="blog.html">قالب گیری سرامیک حرفه ای برای مبتدیان</a></h2>
                            <a class="btn_one" href="blog.html">ادامه مطلب<i class="ti-arrow-top-left"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                     data-wow-offset="0">
                    <div class="single_blog">
                        <img src="images/blog/3.jpg" class="img-fluid" alt="image">
                        <div class="content_box">
                            <span>18 مه 2024 |<a href="blog.html">برنامه نویسی</a></span>
                            <h2><a href="blog.html">آموزش درباره ایجاد رهبران برای فردا است</a></h2>
                            <a class="btn_one" href="blog.html">ادامه مطلب<i class="ti-arrow-top-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout/footer')
    </body>
    <script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
{{--    <script src="{{asset('js/modernizr-2.8.3.min.js')}}"></script>--}}
    <script src="{{asset('js/jquery-simple-mobilemenu.js')}}"></script>
    <script src="{{asset('owlcarousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
{{--    <script src="{{asset('js/jquery.inview.min.js')}}"></script>--}}
{{--    <script src="{{asset('js/scrolltopcontrol.js')}}"></script>--}}
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
{{--        <div class="container">--}}
{{--            <input type="text" name="persianDatapicker" id="persian">--}}
{{--        </div>--}}
{{--        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>--}}
{{--        <script src="{{asset('js/kamadatepicker.js')}}"></script>--}}
{{--        <script>--}}
{{--            kamaDatepicker('persian')--}}
{{--        </script>--}}
    </body>
</html>
