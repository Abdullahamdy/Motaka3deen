@if($currentStep != 2)
    <div style="display: none"  class="row setup-content" id="step-2">
        @endif

        <div class="tab__status row" data-content id="tabTwo">

            <div class="form-group col-md-4 col-xs-12">
                <h4>الحاله الاجتماعية</h4>
                <input type="text" wire:model="Social_status" class="form-control">
                @error('Social_status')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <h4>عدد افراد الاسرة</h4>
                <input type="text"wire:model="num_of_family_members" class="form-control">
                @error('num_of_family_members')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <h4>هل تعول احد اخر غير افراد الاسرة</h4>
                <input type="text"wire:model="Do_you_support_anyone_other_than_family_members" class="form-control">
                @error('Do_you_support_anyone_other_than_family_members')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <h4>الراتب التقاعدى تقريبا</h4>
                <input type="text"wire:model="Pension_approx" class="form-control">
                @error('Pension_approx')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <h4>دخل اخر غير الراتب التقاعدى</h4>
                <input type="text"wire:model="Income_other_than_pension" class="form-control">
                @error('Income_other_than_pension')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <h4>مصدر هذا الدخل</h4>
                <input type="text"wire:model="The_source_of_this_income" class="form-control">
                @error('The_source_of_this_income')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <h4>نوع السكن</h4>
                <input type="text"wire:model="Accommodation_type" class="form-control">
                @error('Accommodation_type')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <h4>الرغبة بالعمل بعد التقاعد</h4>
                <input type="text"wire:model="Desire_to_work_after_retirement" class="form-control">
                @error('Desire_to_work_after_retirement')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <h4>الراتب المتوقع</h4>
                <input type="text"wire:model="Expected_Salary" class="form-control">
                @error('Expected_Salary')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <h4>نوع العمل</h4>
                <input type="text"wire:model="type_of_employment" class="form-control">
                @error('type_of_employment')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <h4>نوع العضوية و الاشتراك السنوي في الجمعية</h4>
                <input type="text"wire:model="Type_of_membership_and_annual_subscription_to_the_association" class="form-control">
                @error('Type_of_membership_and_annual_subscription_to_the_association')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="btn__group">
                <a href="#" class="" wire:click="back(1)">السابق</a>
                <a href="#" class="" wire:click="secondStepSubmit">التالى</a>
            </div>
        </div>

    </div>
