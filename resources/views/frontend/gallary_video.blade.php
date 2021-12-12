@extends('frontend.layout.head_foot')

@section('content')
    <main>

        <!-------------  sub__header  -------------->
        <section class="sub__header">
            <div class="container">
                <h3>الجاليرى \ معرض الفيديوهات</h3>
            </div>
        </section>
        <!-------------  sub__header  -------------->

        <!-- ========== Gallary section ========== -->
        <section class="gallary__container">
            <div class="gallary__sections">
                <!-- ======= videos gallary ======= -->
                <div class="gallary__content">
                    @foreach($gallaries as $gallary)


                        <div class="gallary__data">
                            <iframe  src="{{$gallary->embed}}" frameborder="0" allowfullscreen></iframe>
                    </div>

                        @endforeach


                    <button class="gallary__btn">
                        <a href="#" class="btn">مشاهدة المزيد</a>
                    </button>
                </div>
            </div>
        </section>
        <!-- ========== Gallary section ========== -->

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
