@extends('frontend.layout.head_foot')



@section('content')

    <main>

        <!-------------  sub__header  -------------->
        <section class="sub__header">
            <div class="container">
                <h3>إسم الخدمه</h3>
            </div>
        </section>
        <!-------------  sub__header  -------------->

        <!-- ========== Services section ========== -->
        <div class="new__service__carousel container services-name">
            <div class="service service-name">
                <div class="img-circle">
                    <img src="../frontend/images/logo/logo-small.png" alt="logo-light">
                </div>
                <div class="service__details">
                    <h2 class="service__title">{{$serveces->name}}</h2>
                    <p class="service__text">{{$serveces->text}} </p>
                </div>
                <a type="hiddent" href="{{url('servecs')}}" class="service__read__more">اقرء المزيد</a>
            </div>
        </div>
        <!-- ========== Services section ========== -->

        <!-- ========== News section ========== -->
        <section class="news__container">
            <div class="container">
                <div class="section__title">
                    <img src="../frontend/images/logo/logo-light.png" alt="logo-light">
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

@endsection
