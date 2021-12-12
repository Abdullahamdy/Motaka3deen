@extends('frontend.layout.head_foot')
@section('content')

    <main>

        <!-------------  sub__header  -------------->
        <section class="sub__header">
            <div class="container">
                <h3>الأسئلة الشائعة</h3>
            </div>
        </section>
        <!-------------  sub__header  -------------->

        <!-- ========== Common Questions section ========== -->
        <section class="common-questions__container">
            <div class="container">
                <div class="common-questions-content">
                    <div class="container">
                        <div class="row">
@foreach($questions as $question)
                            <div class="accordion col-md-6 col-xs-12">
                                <div class="accordion-item">
                                    <button id="accordion-button-1" aria-expanded="true"><span class="accordion-title">{{$question->question}}؟</span><span class="icon" aria-hidden="true"></span></button>
                                    <div class="accordion-content">
                                       <p>{{$question->answer}}</p>
                                    </div>
                                </div>


                            </div>
                            @endforeach


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
@endsection
