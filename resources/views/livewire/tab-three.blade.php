@if($currentStep !=3)
    <div style="display: none"  class="row setup-content" id="step-2">
        @endif
        <div class="tab__status row" data-content id="tabThree">
               <div class="form-group col-md-4 col-xs-12">
                    <h4>الحاله الصحية</h4>

                    <input type="text"wire:model="health_status" class="form-control">
                   @error('health_status')
                   <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <h4>هل توجد اعاقة</h4>
                    <input type="text"wire:model="Is_there_a_disability" class="form-control">
                    @error('Is_there_a_disability')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <h4>فصيلة الدم</h4>
                    <select class="custom-select my-1 mr-sm-2"  wire:model="blood_type_id">
                        @foreach($bloodTypes as $blood)
                            <option value="{{$blood->id}}">{{$blood->name}}</option>

                        @endforeach
                    </select>
                    @error('blood_type_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            <div class="form-group col-md-4 col-xs-12">
                <h4>الرقم السري</h4>
                <input type="text"wire:model="password" class="form-control">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>








                <div class="form-group col-md-4 col-xs-12">
                    <h4>هاتف اخر للتواصل</h4>
                    <input type="text"wire:model="another_phone_contact" class="form-control">
                </div>
                <div class="form-group col-md-4 col-xs-12">
                    <h4>جوال اخر للتواصل</h4>
                    <input type="text" wire:model="another_phone" class="form-control">
                </div>
<div class="form-group col-md-4 col-xs-12">
    <h4>هل ترغب بالتطوع في احد اللجان التالية من لجان الجمعية</h4>

    <select class="custom-select my-1 mr-sm-2"  wire:model="committe_id">
@foreach($committees as $commite)
                        <option value="{{$commite->id}}">{{$commite->name}}</option>
        @endforeach
    </select>

    @error('committe_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>


<div class="container">


            <div class="btn__group">
                <a href="#" class="" wire:click="back(2)">السابق</a>
                <a href="#" class="" wire:click="submitForm">تسجيل</a>
            </div>

</div>
    </div>

    </div>
