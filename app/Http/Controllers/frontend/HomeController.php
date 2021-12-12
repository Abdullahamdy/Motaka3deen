<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ApplicationScreen;
use App\Models\Category;
use App\Models\Client;
use App\Models\Gallary;
use App\Models\Neww;
use App\Models\Product;

use App\Models\Qusetion;
use App\Models\Servece;
use App\Models\SocialMedia;
use App\Models\whoAre;
use Illuminate\Http\Request;
use Illuminate\View\View;


class HomeController extends Controller
{

    public function index(Request $request){

        $news = Neww::all();
        $whoAre = whoAre::all();
        $serveces = Servece::all();
        $gallaries= Gallary::all();
        $questions = Qusetion::all();


return view('frontend.index',compact('news','whoAre','serveces','gallaries','questions'));

    }


}
