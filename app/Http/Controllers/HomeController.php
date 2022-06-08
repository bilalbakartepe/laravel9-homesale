<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Category;

class HomeController extends Controller
{
    //

    public function index(){
        $sliderdata=Home::limit(4)->get();
        $houselist1=Home::limit(6)->get();
        $firstslide=Home::find(5);
        $categorylist1=Category::all();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'houselist1'=>$houselist1,
            'firstslide'=>$firstslide,
            'categorylist1'=>$categorylist1
        ]);
    }
}
