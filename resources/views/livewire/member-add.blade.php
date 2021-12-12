<div>
    @if (!empty($successMessage))
        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            تم تسجيل عضويتك بنجاح
        </div>
    @endif

    @if ($catchError)
        <div class="alert alert-danger" id="success-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $catchError }}
        </div>
    @endif






        <main>

        <!-------------  sub__header  -------------->
        <section class="sub__header">
            <div class="container">
                <h3>تسجيل عضويه</h3>
            </div>
        </section>
        <!-------------  sub__header  -------------->

        <!------------------  Start Register member section  ----------------->
        <section class="register__member">
            <div class="container">
                <div class="section__title">
                    <img src="../frontend/images/logo/logo-light.png" alt="logo-light">
                    <span>تسجيل عضو جديد</span>
                </div>
                <div class="register__container">
                    <div class="register__tabs">

                        <ul class="nav__tabs">
                            <li><a type="" href="#step-1" id="" class="btn" style=" {{ $currentStep != 1 ? 'btn-default' : "background-color: #0b8335;color:#fff" }}">البيانات الشخصيه</a></li>
                            <li><a type="" href="#step-2" id="" class="btn" style=" {{ $currentStep != 2 ? 'btn-default' : "background-color: #0b8335;color:#fff" }}">البيانات الإجتماعيه</a></li>
                            <li><a type="" href="#step-1" id="" class="btn"style=" {{ $currentStep != 3 ? 'btn-default' : "background-color: #0b8335;color:#fff" }}" >البيانات الصحيه</a></li>
                        </ul>

                        <div class="register__tabs-content">
                            <!-- TAB 1 -->
                         @include('livewire.tab-one')

                            <!-- TAB 2 -->
                           @include('livewire.tab-two')

                            <!-- TAB 3 -->
@include('livewire.tab-three')
                            <!-- TAB 4 -->
                            @if($currentStep !=4)
                                <div style="display: none"  class="row setup-content" id="step-4">
                            @endif
                            <div class="row" data-content>
                                <div class="register__successed col-md-6 col-xs-12">
                                    <span><i class="fa fa-check"></i></span>
                                    <p>تم التسجيل بنجاح</p>
                                </div>
                            </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------  End Register member section  ----------------->

        <!-- ========== News section ========== -->
        <section class="news__container">
            <div class="container">
                <div class="section__title">
                    <img src="../frontend/images/logo/logo-light.png" alt="logo-light">
                    <span>النشره البريديه</span>
                </div>
                <div class="news-content">
                    <form>
                        <input type="email" name="email-news" class="inp-email" placeholder="إكتب بريدك الإلكترونى ليصلك كل جديد">
                        <input type="submit" value="إرسال" class="inp-submit">
                    </form>
                </div>
            </div>
        </section>
        <!-- ========== News section ========== -->

    </main>
</div>
