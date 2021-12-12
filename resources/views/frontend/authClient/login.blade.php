@extends('frontend.layout.head_foot')
@section('content')

    <main>

        <!-------------  sub__header  -------------->
        <section class="sub__header">
            <div class="container">
                <h3>تسجيل الدخول</h3>
            </div>
        </section>
        <!-------------  sub__header  -------------->


        <div class="login__container">
            <form method="post" action="{{url("clientLogin")}}">
                @csrf
                <div class="section__title">
                    <img src="../frontend/images/logo/logo-light.png" alt="logo-light">
                    <span>تسجيل الدخول</span>
                </div>
                <div class="inp__group col-md-12">
                    <div class="form-group col-md-4 col-xs-12">
                        <h4>الاسم</h4>
                        <input type="text"name="name" class="form-control">
                    </div>
                    <div class="form-group col-md-4 col-xs-12">
                        <h4>كلمة السر</h4>
                        <input type="text"name="password" class="form-control">
                    </div>
                </div>
                <div class="btn__group col-xs-12">
                    <button type="submit"> <a class="btn btn-outline">تسجيل </a></button>

                </div>
            </form>
        </div>


        <!-- ========== News section ========== -->
        <section class="news__container">
            <div class="container">
                <div class="section__title">
                    <img src="../frontend/images/logo/logo-light.png" alt="logo-light">
                    <span>النشره البريديه</span>
                </div>
                <div class="news-content">
                    <form>
                        <input type="email" name="email" class="inp-email" placeholder="إكتب بريدك الإلكترونى ليصلك كل جديد">
                        <input type="submit" value="إرسال" class="inp-submit">
                    </form>
                </div>
            </div>

        </section>
        <!-- ========== News section ========== -->

    </main>

@endsection
