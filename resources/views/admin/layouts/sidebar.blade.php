
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">

                    {{--// profile image and display name of user--}}

                    <span>
                            <img alt="image"  style="max-width: 183px;"
                                 src="{{asset('photos/cartoon.png')}}"/>
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold"></strong>
                                    {{-- <strong class="font-bold">{{Auth::user()->name}}</strong> --}}

                                </span>
                            </span>
                    </a>



                </div>

                <div class="logo-element">

                    <img src="{{asset('photos/logo_title.png')}}" style="margin-top: 20px; margin-bottom:auto;" height="20"
                         alt="logo">
                </div>
            </li>
            {{--Home--}}


            <li>
                <a href="{{url('admin/Committees')}}">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">الجمعيات</span>
                </a>
            </li>


            <li>
                <a href="{{url('admin/social-media')}}">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">الحسابات الشخصية</span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/contact-us')}}">
                    <i class="fa fa-home"></i>
                    <span class="nav-label"> تواصل معنا</span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/clients')}}">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <span class="nav-label"> العملاء المشتركين</span>
                </a>
            </li>
            <li>
                <a href="{{url('admin/subscripes')}}">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">البريد</span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/advertising')}}">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <span class="nav-label"> الاعلانات</span>
                </a>
            </li>


            <li>
                <a href="{{url('admin/attachments')}}">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <span class="nav-label">اضافة صورة وفيديو</span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/who-are')}}">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <span class="nav-label"> من نحن</span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/serveces')}}">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <span class="nav-label">الخدمات</span>
                </a>
            </li>
            <li>
                <a href="{{url('admin/question')}}">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <span class="nav-label">الأسئلة</span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/terms')}}">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <span class="nav-label">الشروط والخصوصيه</span>
                </a>
            </li>
            <li>

                <a href="{{url('admin/new')}}">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <span class="nav-label"> الأخبار</span>
                </a>
            </li>




        </ul>
    </div>
</nav>
