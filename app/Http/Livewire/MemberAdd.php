<?php

namespace App\Http\Livewire;

use App\Models\BloodType;
use App\Models\Client;
use App\Models\Committe;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class MemberAdd extends Component
{
    public
        $currentStep = 1,
        $catchError,
        $name,
        $successMessage = '',
        $updateMode = false,
        $parent_name, $password,
        $last_name, $d_o_b,
        $place_of_birth, $ID_card_number,
        $home_phone, $office_phone, $fax,
        $phone, $email,
        $Post_number, $city, $code,$Qualification,
        $type_of_retirement, $retirement_year,
        $Last_job_before_retirement, $Total_years_of_service,
        $Social_status, $Employer_upon_retirement, $The_nature_of_the_previous_work,
        $num_of_family_members, $Do_you_support_anyone_other_than_family_members,
        $Pension_approx, $Income_other_than_pension,$The_source_of_this_income,$committe_id,$Accommodation_type,$Desire_to_work_after_retirement,
        $Expected_Salary,$type_of_employment,$Type_of_membership_and_annual_subscription_to_the_association,
        $health_status,$Is_there_a_disability,$blood_type_id,$another_phone_contact,$another_phone,$is_active;

    public function render()
    {
        return view('livewire.member-add', [

            'clients' => Client::all(),
            'committees'=> Committe::all(),
            'bloodTypes'=> BloodType::all(),
        ]);
    }

    public function firstStepSubmit(){
        $this->validate([
            'name'=>'required',
            'parent_name' => 'required',
            'last_name' => 'required',
            'd_o_b' => 'required',
            'place_of_birth' => 'required',
            'ID_card_number' => 'required|unique:clients,ID_card_number,' . $this->id,
            'home_phone' => 'required|unique:clients,home_phone,' . $this->id,
            'office_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'fax' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:5',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'email' => 'required|email|unique:clients,email,' . $this->id,
            'Post_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:7',
            'city'=>'required',
            'code' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:6',
            'Qualification'=>'required',
            'type_of_retirement' => 'required',
            'retirement_year' => 'required',
            'Last_job_before_retirement' => 'required',
            'Employer_upon_retirement' => 'required',
            'Total_years_of_service'=>'required',
            'The_nature_of_the_previous_work' => 'required',


        ]);


        $this->currentStep = 2;
    }

    public function secondStepSubmit(){
         $this->validate([

         'Social_status' => 'required',
         'num_of_family_members' => 'required',
         'Do_you_support_anyone_other_than_family_members' => 'required',
         'Pension_approx' => 'required',
         'Income_other_than_pension' => 'required',
         'The_source_of_this_income' => 'required',
         'Accommodation_type' => 'required',
         'Desire_to_work_after_retirement' => 'required',
         'Expected_Salary' => 'required',
         'type_of_employment' => 'required',
         'Type_of_membership_and_annual_subscription_to_the_association' => 'required',
         ]);


        $this->currentStep = 3;
    }





    public function updated($propertyName){
        $this->validateOnly($propertyName,[
            'name'=>'required',
            'parent_name' => 'required',
            'last_name' => 'required',
            'd_o_b' => 'required',
            'place_of_birth' => 'required',
            'ID_card_number' => 'required|unique:clients,ID_card_number,' . $this->id,
            'home_phone' => 'required|unique:clients,home_phone,' . $this->id,
            'office_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'fax' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:5',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'email' => 'required|email|unique:clients,email,' . $this->id,
            'Post_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:7',
            'city'=>'required',
            'code' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:6',
            'Qualification'=>'required',
            'type_of_retirement' => 'required',
            'retirement_year' => 'required',
            'Last_job_before_retirement' => 'required',
            'Employer_upon_retirement' => 'required',
            'Total_years_of_service'=>'required',
            'The_nature_of_the_previous_work' => 'required',
             'Social_status' => 'required',
             'num_of_family_members' => 'required',
             'Do_you_support_anyone_other_than_family_members' => 'required',
             'Pension_approx' => 'required',
             'Income_other_than_pension' => 'required',
             'The_source_of_this_income' => 'required',
             'Accommodation_type' => 'required',
             'Desire_to_work_after_retirement' => 'required',
             'Expected_Salary' => 'required',
             'type_of_employment' => 'required',
             'Type_of_membership_and_annual_subscription_to_the_association' => 'required',
             'health_status' => 'required',
             'Is_there_a_disability' => 'required',
             'blood_type_id' => 'required',
             'another_phone_contact'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
             'another_phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'committe_id'=>'required',
             'password' => 'required',

        ]);

    }




     public function thirdStepSubmit()
     {
        $this->validate([

             'health_status' => 'required',
             'Is_there_a_disability' => 'required',
             'blood_type' => 'required',
             'another_phone_contact'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
             'another_phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
             'committe_id'=>'required',
             'password' => 'required',
        ]);

$this->currentStep=4;
     }

    public function submitForm(){
        try{
            $my_Member = new Client();
            $my_Member->name = $this->name;
            $my_Member->parent_name = $this->parent_name;
            $my_Member->last_name = $this->last_name;
            $my_Member->d_o_b = $this->d_o_b;
            $my_Member->place_of_birth = $this->place_of_birth;
            $my_Member->ID_card_number = $this->ID_card_number;
            $my_Member->home_phone = $this->home_phone;
            $my_Member->office_phone = $this->office_phone;
            $my_Member->fax = $this->fax;
            $my_Member->phone = $this->phone;
            $my_Member->email = $this->email;
            $my_Member->Post_number = $this->Post_number;
            $my_Member->city = $this->city;
            $my_Member->code = $this->code;
            $my_Member->Qualification = $this->Qualification;
            $my_Member->type_of_retirement = $this->type_of_retirement;
            $my_Member->retirement_year = $this->retirement_year;
            $my_Member->Last_job_before_retirement = $this->Last_job_before_retirement;
            $my_Member->Employer_upon_retirement = $this->Employer_upon_retirement;
            $my_Member->type_of_employment = $this->type_of_employment;
            $my_Member->Total_years_of_service= $this->Total_years_of_service;
            $my_Member->The_nature_of_the_previous_work = $this->The_nature_of_the_previous_work;

            // social_INPUTS
            $my_Member->Social_status =$this->Social_status;
            $my_Member->num_of_family_members = $this->num_of_family_members;
            $my_Member->Do_you_support_anyone_other_than_family_members = $this->Do_you_support_anyone_other_than_family_members;
            $my_Member->Pension_approx = $this->Pension_approx;
            $my_Member->Income_other_than_pension = $this->Income_other_than_pension;
            $my_Member->The_source_of_this_income = $this->The_source_of_this_income;
            $my_Member->Accommodation_type = $this->Accommodation_type;
            $my_Member->Desire_to_work_after_retirement = $this->Desire_to_work_after_retirement;
            $my_Member->Expected_Salary = $this->Expected_Salary;
            $my_Member->type_of_employment = $this->type_of_employment;
            $my_Member->Type_of_membership_and_annual_subscription_to_the_association = $this->Type_of_membership_and_annual_subscription_to_the_association;


            //health status

            $my_Member->health_status = $this->health_status;
            $my_Member->Is_there_a_disability = $this->Is_there_a_disability;
            $my_Member->blood_type_id = $this->blood_type_id;
            $my_Member->another_phone_contact = $this->another_phone_contact;
            $my_Member->another_phone = $this->another_phone;
            $my_Member->committe_id = $this->committe_id;
            $my_Member->password = Hash::make($this->password);
            $my_Member->is_active =1;
            $my_Member->save();
            $this->successMessage = trans('messages.success');
            $this->clearForm();
            $this->currentStep = 4;

        }catch(\Exception $e){
            $this->catchError = $e->getMessage();
        }


    }


    public function clearForm(){

        $this->name = '';
        $this->parent_name = '';
        $this->last_name = '';
        $this->d_o_b = '';
        $this->place_of_birth = '';
        $this->ID_card_number ='';
        $this->home_phone = '';
        $this->office_phone = '';
        $this->fax = '';
        $this->phone = '';
        $this->email = '';
        $this->Post_number ='';
        $this->city = '';
        $this->code = '';
        $this->Qualification = '';
        $this->type_of_retirement = '';
        $this->retirement_year = '';
        $this->Last_job_before_retirement = '';
        $this->Employer_upon_retirement = '';
        $this->type_of_employment = '';
        $this->Total_years_of_service= '';
        $this->The_nature_of_the_previous_work = '';

        // social_INPUTS
        $this->Social_status ='';
        $this->num_of_family_members = '';
        $this->Do_you_support_anyone_other_than_family_members ='';
        $this->Pension_approx = '';
        $this->Income_other_than_pension = '';
        $this->The_source_of_this_income = '';
        $this->Accommodation_type = '';
        $this->Desire_to_work_after_retirement = '';
        $this->Expected_Salary = '';
        $this->type_of_employment = '';
        $this->Type_of_membership_and_annual_subscription_to_the_association = '';


        //health status

        $this->health_status = '';
        $this->Is_there_a_disability = '';
        $this->blood_type_id = '';
        $this->another_phone_contact = '';
        $this->another_phone = '';
        $this->committe_id = '';
        $this->Password ='';


    }
    public function back($step){
        $this->currentStep = $step;

    }

}
