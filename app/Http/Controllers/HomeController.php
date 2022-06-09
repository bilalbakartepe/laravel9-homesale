<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public static function maincategorylist(){

        return Category::where('parentid','=',0)->with('children')->get();
    
    }



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

    public function house($houseid){

        $house=Home::find($houseid);
        $images=DB::table('images')->where('homeid',$houseid)->get();
        $houselist1=Home::limit(6)->get();
        $firstimage=$images[0];

        for($i=1; $i<sizeof($images);$i++){
            $images[$i-1]=$images[$i];
        }

        return view('home.house',[
            'house'=>$house,
            'images'=>$images,
            'houselist1'=>$houselist1
        ]);
    }

    public function categoryhouses($id,$title){

        $category= Category::find($id);
        $houses=DB::table('homes')->where('categoryid',$id)->get();
        return view('home.categoryhomes',[
            'houses'=>$houses,
            'category'=>$category
        ]);
    }

   
}
