@extends('frontend.layout.head_foot')
@section('content')

    <main>

        <!-------------  sub__header  -------------->
        <section class="sub__header">
            <div class="container">
                <h3>تواصل معنا</h3>
            </div>
        </section>
        <!-------------  sub__header  -------------->


        <div class="contant__container">
            <div class="section__title">
                <img src="../frontend/images/logo/logo-light.png" alt="logo-light">
                <span>تسجيل الدخول</span>
            </div>

            <div class="container">
                <form method="post" action="contact-us">
                    @csrf
                <div class="row">

                    <div class="contact__form col-md-6 col-xs-12">
                        <div class="form-group col-md-12 col-xs-12">
                            <h4>الاسم</h4>
                            <input type="text" name="name" class="form-control"value="{{auth()->user()->name}}"readonly>
                        </div>
                        <div class="form-group col-md-12 col-xs-12">
                            <h4> رقم الموبايل</h4>
                            <input type="text" name="phone" class="form-control" value="{{auth()->user()->another_phone}}" readonly>
                        </div>
                        <div class="form-group col-md-12 col-xs-12">
                            <h4>عنوان الرساله</h4>
                            <input type="text"name="tittle" class="form-control">
                        </div>
                        <div class="form-group col-md-12 col-xs-12">
                            <h4>نص الرساله</h4>
                            <input type="text"name="message" class="form-control">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-outline btn-success">Submit</button>
                        </div>
                    </div>
                    </form>
{{--                        <input type="submit" value="إرسال" class="inp-submit">--}}


                    <div class="contact__details col-md-6 col-xs-12">
                        <div class="contact__location col-md-12">
                            <span><i class="fa fa-map-marker"></i></span>
                            <div>
                                <h2>العنوان</h2>
                                <p>المملكة العربية السعودية نجران - حي ال منجم بجوار مستشفى الظافر</p>
                            </div>
                        </div>
                        <div class="contact__phone col-md-12">
                            <span><i class="fa fa-phone-alt"></i></span>
                            <div>
                                <h2>الهاتف</h2>
                                <p>966555045140</p>
                            </div>
                        </div>
                        <div class="contact__email col-md-12">
                            <span><i class="fa fa-envelope"></i></span>
                            <div>
                                <h2>البريد الإلكترونى</h2>
                                <p>Company Mail : info@najrra.com</p>
                            </div>
                        </div>

                    </div>
                </div>
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
