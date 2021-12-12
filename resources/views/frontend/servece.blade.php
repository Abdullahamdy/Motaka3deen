@extends('frontend.layout.head_foot')
<link rel="stylesheet" href="{{asset("frontend/css/all.css")}}">
<link rel="stylesheet" href="{{asset("frontend/webfonts/ArbFONTS-Fairuz-Black.otf")}}">
<link rel="stylesheet" href="{{asset("frontend/webfonts/ArbFONTS-Fairuz-Bold.otf")}}">
<link rel="stylesheet" href="{{asset("frontend/webfonts/ArbFONTS-Fairuz-Black.otf")}}">
<link rel="stylesheet" href="{{asset("frontend/webfonts/ArbFONTS-Fairuz-Black.otf")}}">
@section('css')
    @endsection
@section('content')
    <main>

        <!-------------  sub__header  -------------->
        <section class="sub__header">
            <div class="container">
                <h3>الخدمات</h3>
            </div>
        </section>
        <!-------------  sub__header  -------------->

        <!-- ========= Services section ========== -->
        <div class="new__service__carousel container">
            <div class="row">



@foreach($serveces as $serve)



                       <div class="service col-md-3 col-lg-6 col-xs-12">
                           <div class="img-circle">
                               <img src="{{asset("frontend/images/logo/logo-small.png")}}" alt="logo-light">
                           </div>
                           <div class="service__details">
                               <h2 class="service__title">{{$serve->name}}</h2>
                               <p id="inputField" class="service__text">{{$serve->text}}</p>
                           </div>
                           <a href="{{url('show-more/'.$serve->id)}}" class="service__read__more">اقرء المزيد</a>
                       </div>


                @endforeach









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
<!------------------------ End content Section --------------------------->


<!------------------------ Start footer Section --------------------------->
@endsection
