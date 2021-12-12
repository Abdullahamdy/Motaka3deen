@extends('frontend.layout.head_foot')


@section('content')


    <main>

        <!-------------  sub__header  -------------->
        <section class="sub__header">
            <div class="container">
                <h3>الشروط و الأحكام</h3>
            </div>
        </section>
        <!-------------  sub__header  -------------->

        <div class="terms__container">
            <div class="container">
                <div class="term__header">
                    <h2>الشروط والاحكام</h2>
                    <p>هذا الموقع ملك جمعية المتقاعدين بنجران وهي التي تقوم بإدارته .</p>
                    <p>يرجى قراءة هذه البنود والشروط جيداً حيث أنها شروط استخدام هذا الموقع التي قامت جمعية المتقاعدين بنجران بوضعها .</p>
                </div>
                <ul class="term__content col-md-12 col-xs-12">
                    @foreach($terms as $term)
                    <li>
                        <span>{{++$loop->index}}</span>
<p>

    {{$term->text}}
</p>

                    </li>
                    @endforeach

                </ul>
            </div>
        </div>

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
