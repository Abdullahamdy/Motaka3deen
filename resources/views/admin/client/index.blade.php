@extends('admin.layouts.main',[
								'page_header'		=> 'Client',
								'page_description'	=> 'show ',
								'link' => url('admin/clients        ')
								])
@section('content')

    <div class="ibox box-primary">


        <div class="row">
            {!! Form::open([
                'method' => 'GET'
            ]) !!}
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">&nbsp;</label>
                    {!! Form::text('name',old('name'),[
                        'class' => 'form-control',
                        'placeholder' => 'name'
                    ]) !!}
                </div>
            </div>


            <div class="col-md-3">
                <div class="form-group">
                    <label for="">&nbsp;</label>
                    <button class="btn btn-primary btn-block" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>

        <div class="ibox-content">
            @if(!empty($records) && count($records)>0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>








                        <th class="text-center">الاسم</th>
                        <th class="text-center">اسم الاب</th>
                        <th class="text-center">اسم العائلة</th>
                        <th class="text-center">تاريخ الميلاد</th>
                        <th class="text-center">مكا ن الميلاد</th>
                        <th class="text-center">رقم بطاقة الاحوال</th>
                        <th class="text-center">هاتف منزل</th>
                        <th class="text-center">هاتف مكتب</th>
                        <th class="text-center">فاكس</th>
                        <th class="text-center">الرقم البريدى</th>
                        <th class="text-center">المدينة</th>
                        <th class="text-center">الرمز</th>
                        <th class="text-center">رقم الجوال</th>
                        <th class="text-center">البريد الإلكترونى</th>
                        <th class="text-center">المؤهل العلمى</th>
                        <th class="text-center">نوع التقاعد</th>
                        <th class="text-center">سنة التقاعد</th>
                        <th class="text-center">اخر مركز وظيفى قبل التقاعد</th>
                        <th class="text-center">جهة العمل عند التقاعد</th>
                        <th class="text-center">مجموع سنوات الخدمة</th>
                        <th class="text-center">طبيعة العمل السابق</th>


                        <th class="text-center">الحاله الاجتماعية</th>
                        <th class="text-center">عدد افراد الاسرة</th>
                        <th class="text-center">هل تعول احد اخر غير افراد الاسرة</th>
                        <th class="text-center">الراتب التقاعدى تقريبا</th>
                        <th class="text-center">دخل اخر غير الراتب التقاعدى</th>
                        <th class="text-center">مصدر هذا الدخل</th>
                        <th class="text-center">نوع السكن</th>
                        <th class="text-center">الرغبة بالعمل بعد التقاعد</th>
                        <th class="text-center">الراتب المتوقع</th>
                        <th class="text-center">نوع العمل</th>
                        <th class="text-center">نوع العضوية و الاشتراك السنوي في الجمعية</th>


                        <th class="text-center"> الحاله الصحية</th>
                        <th class="text-center">هل توجد اعاقة</th>
                        <th class="text-center"> فصيلة الدم</th>
                        <th class="text-center">اللجان المتطوع بها</th>
                        <th class="text-center">هاتف اخر للتواصل </th>
                        <th class="text-center">جوال اخر للتواصل </th>
                        <th class="text-center">حذف العميل</th>

                        <th class="text-center"> الحاله</th>



                        </thead>
                        <tbody>
                        @foreach($records as $record)

                        <tr id="removable{{$record->id}}">

                            <td>{{optional($record)->name}}</td>
                            <td>{{optional($record)->parent_name}}</td>
                            <td>{{optional($record)->last_name}}</td>
                            <td>{{optional($record)->d_o_b}}</td>
                            <td>{{optional($record)->place_of_birth}}</td>
                            <td>{{optional($record)->ID_card_number}}</td>
                            <td>{{optional($record)->home_phone}}</td>
                            <td>{{optional($record)->office_phone}}</td>
                            <td>{{optional($record)->fax}}</td>
                            <td>{{optional($record)->Post_number}}</td>
                            <td>{{optional($record)->city}}</td>
                            <td>{{optional($record)->code}}</td>
                            <td>{{optional($record)->phone}}</td>
                            <td>{{optional($record)->email}}</td>
                            <td>{{optional($record)->Qualification}}</td>
                            <td>{{optional($record)->type_of_retirement}}</td>
                            <td>{{optional($record)->retirement_year}}</td>
                            <td>{{optional($record)->Last_job_before_retirement}}</td>
                            <td>{{optional($record)->Employer_upon_retirement}}</td>
                            <td>{{optional($record)->Total_years_of_service}}</td>
                            <td>{{optional($record)->The_nature_of_the_previous_work}}</td>

                            <td>{{optional($record)->Social_status}}</td>
                            <td>{{optional($record)->num_of_family_members}}</td>
                            <td>{{optional($record)->Do_you_support_anyone_other_than_family_members}}</td>
                            <td>{{optional($record)->Pension_approx}}</td>
                            <td>{{optional($record)->Income_other_than_pension }}</td>
                            <td>{{optional($record)->The_source_of_this_income}}</td>
                            <td>{{optional($record)->Accommodation_type}}</td>
                            <td>{{optional($record)->Desire_to_work_after_retirement}}</td>
                            <td>{{optional($record)->Expected_Salary}}</td>
                            <td>{{optional($record)->type_of_employment}}</td>
                            <td>{{optional($record)->Type_of_membership_and_annual_subscription_to_the_association}}</td>

                            <td>{{optional($record)->health_status}}</td>
                            <td>{{optional($record)->Is_there_a_disability}}</td>
                            <td>{{optional($record)->blood_type}}
                            <td>{{optional($record)->Volunteer_in_other_committees}}</td>
                            <td>{{optional($record)->another_phone}}</td>

                            <td>{{optional($record)->another_phone_contact}}</td>
                                 <td class="text-center">
                                    <button
                                            id="{{$record->id}}"
                                            data-token="{{ csrf_token() }}"
                                            data-route="{{url('admin/clients/'.$record->id)}}"
                                            type="button"
                                            class="destroy btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                 </td>

                            <td class="text-center">
                                {!! \App\MyHelper\Helper::toggleBooleanView($record , url('admin/clients/toggle-boolean/'.$record->id.'/is_active'),'is_active') !!}</td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $records->appends(request()->all())->render() !!}
            @else
                <div>
                    <h3 class="text-info" style="text-align: center">No Data For Show</h3>
                </div>
            @endif


        </div>
    </div>
@stop

@section('script')
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'showImageNumberLabel':false,

        })
    </script>
@stop
