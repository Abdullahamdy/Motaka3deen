@extends('frontend.layout.head_foot')
@section('content')
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
                            <li><a href="#" id="tab" class="nav-tab active__tab" data-target = "#tabOne">البيانات الشخصيه</a></li>
                            <li><a href="#" id="dis" class="nav-tab disabled" data-target = "#tabTwo">البيانات الإجتماعيه</a></li>
                            <li><a href="#" id="asd" class="nav-tab disabled" data-target = "#tabThree">البيانات الصحيه</a></li>
                        </ul>

                        <div class="register__tabs-content">
                            <!-- TAB 1 -->
                            <form method="post" action="{{url("create-account")}}">
                                @csrf
                            <div class="tab__content tab-1 row tab__content-active" data-content id="tabOne">
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>الإسم</h4>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>اسم الاب</h4>
                                    <input type="text" name="parent_name" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>اسم العائلة</h4>
                                    <input type="text" name="last_name" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>تاريخ الميلاد</h4>
                                    <input type="date" name="d_o_b" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>مكا ن الميلاد</h4>
                                    <input type="text" name="place_of_birth" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>رقم بطاقة الاحوال</h4>
                                    <input type="text" name="ID_card_number" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>هاتف منزل</h4>
                                    <input type="text"name="home_phone" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>هاتف مكتب</h4>
                                    <input type="text" name="office_phone" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>فاكس</h4>
                                    <input type="text" name="fax" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>رقم الجوال</h4>
                                    <input type="text"name="phone" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>البريد الإلكترونى</h4>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>الرقم البريدى</h4>
                                    <input type="text"name="Post_number" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>المدينة</h4>
                                    <input type="text"name="city" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>الرمز</h4>
                                    <input type="text"name="code" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>المؤهل العلمى</h4>
                                    <input type="text"name="Qualification" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>نوع التقاعد</h4>
                                    <input type="text"name="type_of_retirement" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>سنة التقاعد</h4>
                                    <input type="text" name="retirement_year" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>اخر مركز وظيفى قبل التقاعد</h4>
                                    <input type="text"name="Last_job_before_retirement" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>جهة العمل عند التقاعد</h4>
                                    <input type="text"name="Employer_upon_retirement" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>مجموع سنوات الخدمة</h4>
                                    <input type="text"name="Total_years_of_service" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>طبيعة العمل السابق</h4>
                                    <input type="text"name="The_nature_of_the_previous_work" class="form-control">
                                </div>




                                <div class="btn__group col-md-12 col-xs-12">
                                    <a href="#" class="next__tab-1">التالى</a>
                                </div>
                            </div>

                            <!-- TAB 2 -->
                            <div class="tab__content tab-2 row" data-content id="tabTwo">
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>الحاله الاجتماعية</h4>
                                    <input type="text" name="Social_status" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>عدد افراد الاسرة</h4>
                                    <input type="text"name="num_of_family_members" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>هل تعول احد اخر غير افراد الاسرة</h4>
                                    <input type="text"name="Do_you_support_anyone_other_than_family_members" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>الراتب التقاعدى تقريبا</h4>
                                    <input type="text"name="Pension_approx" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>دخل اخر غير الراتب التقاعدى</h4>
                                    <input type="text"name="Income_other_than_pension" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>مصدر هذا الدخل</h4>
                                    <input type="text"name="The_source_of_this_income" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>نوع السكن</h4>
                                    <input type="text"name="Accommodation_type" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>الرغبة بالعمل بعد التقاعد</h4>
                                    <input type="text"name="Desire_to_work_after_retirement" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>الراتب المتوقع</h4>
                                    <input type="text"name="Expected_Salary" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>نوع العمل</h4>
                                    <input type="text"name="type_of_employment" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>نوع العضوية و الاشتراك السنوي في الجمعية</h4>
                                    <input type="text"name="Type_of_membership_and_annual_subscription_to_the_association" class="form-control">
                                </div>

                                <div class="btn__group">
                                    <a href="#" class="next__tab-1">السابق</a>
                                    <a href="#" class="next__tab-2">التالى</a>
                                </div>
                            </div>

                            <!-- TAB 3 -->
                            <div class="tab__content tab-3 row" data-content id="tabThree">
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>الحاله الصحية</h4>
                                    <input type="text"name="health_status" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>هل توجد اعاقة</h4>
                                    <input type="text"name="Is_there_a_disability" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>فصيلة الدم</h4>
                                    <input type="text"name="blood_type" class="form-control">
                                </div>
                                <div class="form-group col-md-12 col-xs-12">
                                    <h4>هل ترغب بالتطوع في احد اللجان التالية من لجان الجمعية</h4>
                                    <div class="volunteer-checks">
                                        <div class="check__group">
                                            <input type="checkbox" id="intern" name="Volunteer_in_other_committees" value="لجنة التدريب">
                                            <label for="intern">لجنة التدريب</label>
                                        </div>
                                        <div class="check__group">
                                            <input type="checkbox" id="hr" name="Volunteer_in_other_committees" value="لجنة العلاقات العامة">
                                            <label for="hr">لجنة العلاقات العامة</label>
                                        </div>
                                        <div class="check__group">
                                            <input type="checkbox" id="activity" name="Volunteer_in_other_committees" value="لجنة الأنشطة الاجتماعية">
                                            <label for="activity">لجنة الأنشطة الاجتماعية</label>
                                        </div>
                                        <div class="check__group">
                                            <input type="checkbox" id="healthy" name="Volunteer_in_other_committees" value="اللجنه الصحية">
                                            <label for="healthy">اللجنه الصحية</label>
                                        </div>
                                        <div class="check__group">
                                            <input type="checkbox" id="exp" name="Volunteer_in_other_committees" value="تسويق الخبرات">
                                            <label for="exp">تسويق الخبرات</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>هاتف اخر للتواصل</h4>
                                    <input type="text"name="another_phone_contact" class="form-control">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>جوال اخر للتواصل</h4>
                                    <input type="text" name="another_phone" class="form-control">
                                </div>

                                <div class="btn__group col-xs-12">
                               <button type="submit" class="btn btn-outline">     <a class="register__tab-successed">تسجيل</a></button>
                                </div>
                            </div>
                            </form>
                            <!-- TAB 4 -->
                            <div class="tab__content tab-4 row" data-content>
                                <div class="register__successed col-md-6 col-xs-12">
                                    <span><i class="fa fa-check"></i></span>
                                    <p>تم التسجيل بنجاح</p>
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
@endsection
