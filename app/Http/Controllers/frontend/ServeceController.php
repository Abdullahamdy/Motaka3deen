<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Servece;
use Illuminate\Http\Request;

class ServeceController extends Controller
{
    public function index(){
        $serveces = Servece::all();
        return view('frontend.servece',compact('serveces'));
    }

    public function showmore($id){
        $serveces = Servece::where('id',$id)->first();
        return view('frontend.serveces_details',compact('serveces'));
    }
}
