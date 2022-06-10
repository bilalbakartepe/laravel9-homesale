<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

use App\Models\Setting;
use App\Models\Message;
use App\Models\Faq;
use App\Models\Comment;
use Auth;

class HomeController extends Controller
{
    //

    public static function maincategorylist(){

        return Category::where('parentid','=',0)->with('children')->get();
    
    }



    public function index(){
        if(Home::limit(8)->get()){
            $sliderdata=Home::limit(4)->get();
            $houselist1=Home::limit(6)->get();
            $firstslide=Home::find(1);

            $categorylist1=Category::all();

            return view('home.index',[
                'sliderdata'=>$sliderdata,
                'houselist1'=>$houselist1,
                'firstslide'=>$firstslide,
                'categorylist1'=>$categorylist1
            ]);
        } 
    }

    public function house($houseid){

        $house=Home::find($houseid);
        $images=DB::table('images')->where('homeid',$houseid)->get();
        $houselist1=Home::limit(6)->get();
        $firstimage=$images[0];
        $comments=DB::table('comments')->where('home_id',$houseid)->where('status','true')->get();
        
        for($i=1; $i<sizeof($images);$i++){
            $images[$i-1]=$images[$i];
        }

        return view('home.house',[
            'house'=>$house,
            'images'=>$images,
            'houselist1'=>$houselist1,
            'comments'=>$comments
        ]);
    }

    public function categoryhouses($id,$title){

        $category= Category::find($id);
        $houses=DB::table('homes')->where('categoryid',$id)->get();
        return view('home.categoryhouses',[
            'houses'=>$houses,
            'category'=>$category
        ]);
    }

    public function contact(){
        
        $data=Setting::first();
        
        if($data!=null){
            return view("home.contact",['data'=>$data]);
        }

    }

    public function storemessage(Request $request){
        
        
        $data=new Message();
        
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->ip=request()->ip();
        
        $data->save();

        return redirect()->route('home.contact')->with('info','Your message has been send');

    }

    public function storecomment(Request $request){
        
        $data=new Comment();
        
        $data->comment=$request->comment;
        $data->rate=$request->rate;
        $data->home_id=$request->house_id;
        $data->user_id=Auth::id();
        $data->ip=request()->ip();
        
        $data->save();

        return redirect("/house/$request->house_id");

    }

    public function references (){
        
        $data=Setting::first();
        
        if($data!=null){
            return view("home.references",['data'=>$data]);
        }
    }
    
    public function about(){
         
        $data=Setting::first();
        
        if($data!=null){
            return view("home.about",['data'=>$data]);
        }
        
    }

    public function faq(){

        $datalist=Faq::all();
        $setting=Setting::first();
        return view("home.faq",['datalist'=>$datalist,'setting'=>$setting]);
    }

   
}
