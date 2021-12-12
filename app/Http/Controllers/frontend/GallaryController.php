<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function image(){
        $gallaries = Gallary::all();
return view('frontend.gallary_photo',compact('gallaries'));
    }
    public function video(){

            $gallaries = Gallary::all();
            return view('frontend.gallary_video',compact('gallaries'));
        }
}
