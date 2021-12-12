@extends('frontend.layout.head_foot')
@section('content')
<main>

    <!-------------  sub__header  -------------->
    <section class="sub__header">
        <div class="container">
            <h3>مـن نحـن</h3>
        </div>
    </section>
    <!-------------  sub__header  -------------->

    <!-- ========== About section ========== -->
    <section class="about__container about-responsive">
        <div class="container">
            @if(isset($whoAre))
            <div class="about__content container">
                <div class="row">

                    <div class="about__info col-md-6 col-xs-12">
                        <h3 class="about__info-title">{{$whoAre->name}}</h3>
                        <p class="about__info-text">
                            {{$whoAre->message}}
                        </p>
                        <a href="{{url('who-are')}}" class="read__more">اقرء المزيد</a>
                    </div>
                    <div class="about__video col-md-6 col-xs-12">

                        <iframe width="420" height="315" src="{{$whoAre->url_video}}" frameborder="0" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
    <!-- ========== About section ========== -->

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
