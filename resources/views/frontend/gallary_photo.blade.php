@extends('frontend.layout.head_foot')
@section('content')
    <main>

        <!-------------  sub__header  -------------->
        <section class="sub__header">
            <div class="container">
                <h3>الجاليرى \ معرض الصور</h3>
            </div>
        </section>
        <!-------------  sub__header  -------------->

        <!-- ========== Gallary section ========== -->
        <section class="gallary__container">
            <div class="gallary__sections">
                <!-- ======= photos gallary  ======= -->
                <div class="gallary__content row gallary__active">

@foreach($gallaries as $gallary)
    @foreach($gallary->image as $img)

                    <div class="gallary__data">
                        <img src="{{asset("Accessories/Attachments/".$img->filename)}}" alt="">
                        <div class="overlay__gallary">
                            <p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة</p>
                            <i class="fas fa-external-link-alt"></i>
                        </div>
                    </div>
                    @endforeach
                    @endforeach


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
