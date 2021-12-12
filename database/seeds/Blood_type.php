<?php

use Illuminate\Database\Seeder;

class Blood_type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('blood_types')->delete();
            $bgs = ['O+','O-','A+','A-','B+','B-','AB+','AB-'];
            foreach ($bgs as $bg){
                \App\Models\BloodType::create(['name'=>$bg]);

        }
    }
}
