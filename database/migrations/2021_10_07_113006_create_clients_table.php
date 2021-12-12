<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
//            Personal data

            $table->string('name');
            $table->string('parent_name');
            $table->string('last_name');
            $table->date('d_o_b');
            $table->string('place_of_birth');
            $table->string('ID_card_number');
            $table->string('home_phone');
            $table->string('office_phone');
            $table->string('fax');
            $table->string('Post_number');
            $table->string('city');
            $table->string('code');
            $table->string('phone');
            $table->string('Qualification');
            $table->string('email');
            $table->string('type_of_retirement');
            $table->integer('retirement_year');
            $table->string('Last_job_before_retirement');
            $table->string('Employer_upon_retirement');
            $table->integer('Total_years_of_service');
            $table->string('The_nature_of_the_previous_work');
            $table->string('Social_status');
            $table->integer('num_of_family_members');
            $table->string('Do_you_support_anyone_other_than_family_members');
            $table->integer('Pension_approx');
            $table->integer('Income_other_than_pension');
            $table->string('The_source_of_this_income');
            $table->string('Accommodation_type');
            $table->string('Desire_to_work_after_retirement');
            $table->integer('Expected_Salary');
            $table->string('type_of_employment');
            $table->string('Type_of_membership_and_annual_subscription_to_the_association');
            $table->string('health_status');
            $table->string('Is_there_a_disability');
            $table->bigInteger('blood_type_id')->unsigned();
            $table->foreign('blood_type_id')->references('id')->on('blood_types')->onDelete('cascade');
            $table->string('another_phone');
            $table->bigInteger('committe_id')->unsigned();
            $table->foreign('committe_id')->references('id')->on('committes')->onDelete('cascade')->nullable();
            $table->string('another_phone_contact');
            $table->string('password');
            $table->integer('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
