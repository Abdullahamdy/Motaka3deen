@if($currentStep !=1)
    <div style="display: none" class="row setup-content" id="step-1">
        @endif

<div class="tab__content tab-1 row tab__content-active" data-content id="tabOne">
    <div class="form-group col-md-4 col-xs-12">
        <h4>الإسم</h4>
        <input type="text" wire:model="name" class="form-control">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>اسم الاب</h4>
        <input type="text" wire:model="parent_name" class="form-control">
        @error('parent_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>اسم العائلة</h4>
        <input type="text" wire:model="last_name" class="form-control">
        @error('last_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>تاريخ الميلاد</h4>
        <input type="date" wire:model="d_o_b" class="form-control">
        @error('d_o_b')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>مكا ن الميلاد</h4>
        <input type="text" wire:model="place_of_birth" class="form-control">
        @error('place_of_birth')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>رقم بطاقة الاحوال</h4>
        <input type="text" wire:model="ID_card_number" class="form-control">
        @error('ID_card_number')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>هاتف منزل</h4>
        <input type="text"wire:model="home_phone" class="form-control">
        @error('home_phone')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>هاتف مكتب</h4>
        <input type="text" wire:model="office_phone" class="form-control">
        @error('office_phone')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>فاكس</h4>
        <input type="text" wire:model="fax" class="form-control">
        @error('fax')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>رقم الجوال</h4>
        <input type="text"wire:model="phone" class="form-control">
        @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>البريد الإلكترونى</h4>
        <input type="text" wire:model="email" class="form-control">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group col-md-4 col-xs-12">
        <h4>الرقم البريدى</h4>
        <input type="text"wire:model="Post_number" class="form-control">
        @error('Post_number')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>المدينة</h4>
        <input type="text"wire:model="city" class="form-control">
        @error('city')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>الرمز</h4>
        <input type="text"wire:model="code" class="form-control">
        @error('code')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>المؤهل العلمى</h4>
        <input type="text"wire:model="Qualification" class="form-control">
        @error('Qualification')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>نوع التقاعد</h4>
        <input type="text"wire:model="type_of_retirement" class="form-control">
        @error('type_of_retirement')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>سنة التقاعد</h4>
        <input type="text" wire:model="retirement_year" class="form-control">
        @error('retirement_year')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>اخر مركز وظيفى قبل التقاعد</h4>
        <input type="text"wire:model="Last_job_before_retirement" class="form-control">
        @error('Last_job_before_retirement')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>جهة العمل عند التقاعد</h4>
        <input type="text"wire:model="Employer_upon_retirement" class="form-control">
        @error('Employer_upon_retirement')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>مجموع سنوات الخدمة</h4>
        <input type="text"wire:model="Total_years_of_service" class="form-control">
        @error('Total_years_of_service')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-4 col-xs-12">
        <h4>طبيعة العمل السابق</h4>
        <input type="text"wire:model="The_nature_of_the_previous_work" class="form-control">
        @error('The_nature_of_the_previous_work')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>




    <div class="btn__group col-md-12 col-xs-12">
        <a class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="firstStepSubmit">

التالي   </a>
    </div>
</div>


</div>
