@extends('frontend.layout.head_foot')

@section('content')
<!------------------------ End Header Section ----------------------------->


<!------------------------ Start content Section --------------------------->
<main>

    <!-- =========== Slider section ========== -->
    <section class="slider__container">
        <img src="{{asset("frontend/images/General/bg-hero.png")}}" alt="bg-hero">
        <div class="slider__details">
            <h3 class="slider__details-title">جمعية المتقاعدين بمنطقة نجران</h3>
            <p class="slider__details-text">كتابه نص هنا</p>
        </div>
        <div class="last__news">
            <h5>اخر الاخبار /</h5>
            @foreach($news as $new)
            <h5>{{$new->tittle_new}} /</h5>

<p>{{$new->text}}</p>
            @endforeach
        </div>
    </section>
    <!-- =========== Slider section ========== -->

    <!-- ========== About section ========== -->
    <section class="about__container">
        <div class="container">
            <div class="section__title">
                <img src="{{asset("frontend/images/logo/logo-light.png")}}" alt="logo-light">
                <span>من نحـن</span>
            </div>
            <div class="about__content container">
                @foreach($whoAre as $who)
                <div class="row">
                    <div class="about__info col-md-6 col-xs-12">
                        <h3 class="about__info-title">{{$who->name}}</h3>
                        <p class="about__info-text">
                            {{$who->message}}
                        </p>
                        <a href="{{url('who-are')}}" class="read__more">اقرء المزيد</a>
                    </div>

                    <div class="about__video col-md-6 col-xs-12">
                        <iframe width="420" height="315" src="{{$who->url_video}}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="about__container-model">
            <div class="about__model-img">
                <iframe
                    width="100%" height="500px"
                    src="https://www.youtube.com/embed/HtGxoru6ZX0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    frameborder="0" allowfullscreen>
                </iframe>
            </div>
            <span class="btn__close-model" id="close-model-about"><i class="fa fa-times"></i></span>
        </div>
    </section>
    <!-- ========== About section ========== -->

    <!-- ========== Services section ========== -->
    <div class="services__container">
        <div class="owl-carousel owl-theme container service__carousel" dir="ltr">

@foreach($serveces as $serve)

            <div class="item service">
                <div class="img-circle">
                    <img src="{{asset("frontend/images/logo/logo-small.png")}}" alt="logo-light">
                </div>
                <div class="service__details">
                    <h2 class="service__title">{{$serve->name}}</h2>


                    <p id="inputField" class="service__text">


                        @php $text =  substr($serve->text,0,30);@endphp

  {{$text}}

                    </p>
                </div>
                <a  href="{{ URL('show-more/'.$serve->id )}}" class="service__read__more">اقرء المزيد</a>
            </div>
            @endforeach

        </div>
    </div>
    <!-- ========== Services section ========== -->

    <!-- ========== Gallary section ========== -->
    <secassettifrontendss="gallary__container">{{("")}}
        <div class="">
            <div class="section__title">
                <img src="{{asset("frontend/images/logo/logo-light.png")}}" alt="logo-light">
                <span>جاليرى</span>
            </div>
            <!--==================== Gallary ====================-->
            <section class="gallary section">
                <div class="gallary__contain container">
                    <div class="gallary__tabs">
                        <div class="gallary__button button--inline " data-target='#photos'>
                            معرض الصور
                        </div>
                        <div class="gallary__button button--inline" data-target='#videos'>
                            معرض الفيديوهات
                        </div>
                    </div>

                    <div class="gallary__sections">
                        <!-- ======= photos gallary  ======= -->
                        <div class="gallary__content row gallary__active" data-content id="photos">
                           @foreach($gallaries as $gallary)
                               @foreach($gallary->image as $img)
                                    @if ($loop->index >7)
                                        @break
                                    @endif
                                    <div class="gallary__data">
                                <img src="{{asset("Accessories/Attachments/".$img->filename)}}" alt="">
                                <div class="overlay__gallary active__overlay">
                                    <p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة</p>
                                    <i class="fas fa-external-link-alt"></i>
                                </div>
                            </div>

@endforeach
 @endforeach
                            <button class="gallary__btn">
                                <a href="{{url('gallary-photo')}}" class="btn">مشاهدة المزيد</a>
                            </button>
                        </div>

                        <!-- ======= videos gallary ======= -->
                        <div class="gallary__content" data-content id="videos">

                            @foreach($gallaries as $video)

                                @if ($loop->index >7)
                                    @break
                                @endif
                            <div class="gallary__data gallary__data-videos">

                                <iframe width="300" height="200" src="{{$video->embed}}" frameborder="0" allowfullscreen></iframe>

                            </div>
                            @endforeach

                            <button class="gallary__btn">
                                <a href="{{url('gallary-video')}}" class="btn">مشاهدة المزيد</a>
                            </button>

                        </div>
                    </div>
                </div>
            </section>
            <!-- model gallary image -->
            <div class="model__gallary">
                <div class="model__gallary-img">
                    <div class="control__img">
                        <img src="{{asset("frontend/images/Gallary/gallary-6.png")}}" alt="">
                    </div>
                    <span class="btn__close-model" id="btn__close-model-1"><i class="fa fa-times"></i></span>
                    <span class="btn__next-model" id="btn__next-model"><i class="fa fa-arrow-right"></i></span>
                    <span class="btn__prev-model" id="btn__prev-model"><i class="fa fa-arrow-left"></i></span>
                </div>
            </div>
            <!-- model gallary video -->
            <div class="model__gallary-vidoes">
                <div class="model__gallary-vid">
                    <div class="control__img">
                        <iframe
                            width="100%" height="500px"
                            src="https://www.youtube.com/embed/HtGxoru6ZX0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            frameborder="0" allowfullscreen>
                        </iframe>
                    </div>
                    <span class="btn__close-model" id="btn__close-model-2"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
    </section>
    <!--========== Gallary section ==========-->

    <!-- ========== Common Questions section ========== -->
    <section class="common-questions__container">
        <div class="container">
            <div class="section__title">
                <img src="{{asset("frontend/images/logo/logo-light.png")}}" alt="logo-light">
                <span>الأسئله الشائعه</span>
            </div>
            <div class="common-questions-content">
                <div class="container">
                    <div class="row">
                        <div class="accordion col-md-8 col-xs-12">
                            @foreach($questions as $question)

                            @if ($loop->index >3)
                            @break
                        @endif


                            <div class="accordion-item">
                                <button id="accordion-button-1" aria-expanded="true"><span class="accordion-title">{{$question->question}}؟</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>
                                        {{$question->answer}}.</p>
                                </div>
                            </div>
                            @endforeach
                            <a href="{{url('question')}}" class="read__more">شاهد المزيد</a>
                        </div>
                        <div class="common__question-img col-md-4 col-xs-12">
                            <img src="{{asset("frontend/images/General/common-ques.png")}}" alt="common-ques">
                            <div class="border-img"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ========== Common Questions section ========== -->

    <!-- ========== News section ========== -->
    <section class="news__container">
        <div class="container">
            <div class="section__title">
                <img src="{{asset("frontend/images/logo/logo-light.png")}}" alt="logo-light">
                <span>النشره البريديه</span>
            </div>
            <div class="news-content">
                <form method="post" action="{{url("news-letter")}}">
                    @csrf
                    <input type="email" name="email" class="inp-email" placeholder="إكتب بريدك الإلكترونى ليصلك كل جديد">
                    <input type="submit" value="إرسال" class="inp-submit">
                </form>
            </div>
        </div>
    </section>
    <!-- ========== News section ========== -->

</main>
<!------------------------ End content Section --------------------------->

<!------------------------ Start footer Section --------------------------->
@endsection
