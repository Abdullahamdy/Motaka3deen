
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset("frontend/images/logo/logo-small.png")}}">
    <link rel="stylesheet" href="{{asset("frontend/css/all.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/css/owl.carousel.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("frontend/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/css/style.css")}}">
{{--    <link rel="stylesheet" href="{{ URL::asset('css/wizard.css') }}" id="bootstrap-css">--}}
    <title>جمعية المتقاعدين بمنطقة نجران</title>
</head>

<body>
<!------------------------ Start Header Section --------------------------->
<header id="nav">
    <div class="header__information">
        <div class="container">
            <div class="header-info">
                <div class="signing">
                    @if (auth('client')->user())
                        <form action="/logout" method="post" style="display: inline">
                            @csrf
                    <button style="background-color: #473900; color: white; margin-left: 10px"  type="submit"><i class="fa fa-user"></i> تـسـجـيـل الخروج</button>
                    <span></span>

                        </form>
@else

                        <a href="{{url('member')}}" class="sign"><i class="fa fa-user-plus"></i> تـسـجـيـل جـديـد</a>

                        @endif
                        <span></span>



                </div>
                <div class="social__icons">
                    @inject('social','App\Models\SocialMedia')
                    @php
                    $socials = $social->first();

                    @endphp
                    <ul>
                        @if(isset($socials))
                        <li><a href="#" class="social-icon"> <span>{{$socials->phone}}</span> <i class="fa fa-phone"></i></a></li>
                        <li><a href="{{$socials->whats_num}}" class="social-icon"><i class="fab fa-whatsapp"></i></li>
                        <li><a href="{{$socials->twitter}}" class="social-icon"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{$socials->inesta}}" class="social-icon"><i class="fab fa-instagram"></i></a></li>
                    @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container nav-responsive">
            <div class="nav__bars"><i class="fa fa-bars"></i></div>
            <div class="navbar row">
                <ul class="links__right">
                    <li><a href="{{url("/")}}" class="navLink active__link" >الرئيسيه</a></li>
                    <li><a href="{{url("who-are")}}" class="navLink">من نحن</a></li>
                    <li><a href="{{url("servecs")}}" class="navLink">الخدمات</a></li>
                    <li class="dropdown">
                        <a href="{{url('gallary-photo')}}" class="navLink">الجالرى <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-list">
                            <li><a href="{{url('gallary-photo')}}">معرض الصور</a></li>
                            <li><a href="{{url('gallary-video')}}">معرض الفيديوهات</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="links__left">
                    <li><a href="{{url('question')}}" class="navLink">الأسئله الشائعه</a></li>
                    <li><a href="{{url('terms')}}" class="navLink">الشروط و الاحكام</a></li>
                    <li><a href="{{url("contact-us")}}" class="navLink">تواصل معنا</a></li>
                    <li><a href="#" class="navLink"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <div class="logo">
                <img src="{{asset("frontend/images/logo/logo.png")}}" alt="logo">
            </div>
        </div>
        <div class="side__bar">
            <span class="close__sidebar"><i class="fa fa-times"></i></span>
            <div href="#" class="side__bar-img">
                <img src="{{asset("frontend/images/logo/logo.png")}}" alt="logo">
            </div>
            <ul class="side__bar-links">
                <li><a href="../index.html" class="navLink" >الرئيسيه</a></li>
                <li><a href="about.html" class="navLink">من نحن</a></li>
                <li><a href="services.html" class="navLink">الخدمات</a></li>
                <li class="dropdown">
                    <a href="#" class="navLink">الجالرى <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-list">
                        <li><a href="sub-pages/Gallary-photos.html">معرض الصور</a></li>
                        <li><a href="sub-pages/Gallary-videos.html">معرض الفيديوهات</a></li>
                    </ul>
                </li>
                <li><a href="Common-questions.html" class="navLink">الأسئله الشائعه</a></li>
                <li><a href="{{url("terms")}}" class="navLink">الشروط و الاحكام</a></li>
                <li><a href="Contact-us.html" class="navLink">تواصل معنا</a></li>
            </ul>
        </div>
    </nav>

</header>





@yield('content')



<footer>
    <div class="footer__bg">
        <img src="{{asset("frontend/images/General/footer.png")}}" alt="footer">
    </div>
    <div class="footer__content container">
        <a href="#nav" class="totop"><i class="fa fa-angle-up"></i></a>
        <ul class="nav__footer">
            <li><a href="#home">الرئيسية</a></li>
            <li><a href="{{url("who-are")}}">من نحن</a></li>
            <li><a href="#">الخدمات</a></li>
            <li><a href="#">المعرض</a></li>
            <li><a href="#">الأسئلة الشائعة</a></li>
            <li><a href="#">الشروط والاحكام</a></li>
            <li><a href="#">تواصل معنا</a></li>
        </ul>
        <div class="footer-logo">
            <a href="#" class="block-logo">
                <img src="{{asset("frontend/images/logo/logo.png")}}" alt="logo">
            </a>
        </div>
        @if(isset($socials))
        <ul class="contact__footer">
            <li><a href="{{$socials->another_phone}}"> {{$socials->another_phone}} <i class="fa fa-print"></i></a></li>
            <li><a href="{{$socials->gmail}}"> {{$socials->gmail}} <i class="fa fa-envelope"></i></a></li>
            <li><a href="{{$socials->phone}}">{{$socials->phone}} <i class="fa fa-phone"></i></a></li>
        </ul>
        <ul class="social__footer">
            <li><a href="{{$socials->facebook}}"><i class="fab fa-facebook"></i></a></li>
            <li><a href="{{$socials->githup}}"><i class="fab fa-github"></i></a></li>
            <li><a href="{{$socials->linked_in}}"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="{{$socials->whats_num}}"><i class="fab fa-whatsapp"></i></a></li>
            <li><a href="{{$socials->twitter}}"><i class="fab fa-twitter"></i></a></li>
        </ul>
            @endif
    </div>
</footer>

<!---------  Copyrights  -------->
<section class="bottom__footer">
    <div class="text-bottom">
        <h2>جميع الحقوق محفوظة لموقع جمعية المتقاعدين بمنطقة نجران</h2>
        <a href="#" target="_blank">
            <img src="{{asset("frontend/images/logo/dev.svg")}}" alt="شركه سمارت فيجن">
        </a>
    </div>
</section>
<!---------  Copyrights  -------->

<!------------------------ End footer Section --------------------------->

<script src="{{asset("frontend/js/jquery-3.6.0.min.js")}}"></script>
<script src="{{asset("frontend/js/bootstrap.min.js")}}"></script>
<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
<script src="{{asset("frontend/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("frontend/js/script.js")}}"></script>
<script src="{{asset("frontend/js/model.js")}}"></script>
<script src="{{asset("frontend/js/main.js")}}"></script>
@yield('script')
</body>
</html>
